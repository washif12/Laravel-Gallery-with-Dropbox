<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\gallery;
use App\DropboxGallery;
use App\shareable_links;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

use Dcblogdev\Dropbox\Facades\Dropbox;

class HomeController extends Controller 
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        if (Auth::check()) {
            /*$email = Auth::user()->email;
            $gallery = gallery::where('email', $email)->get();
            //dd($gallery);
            return view('user.user', compact('gallery'));*/
            //return view('user.redirect');
            return redirect('/dropbox');
        }
        else 
            return redirect('/');
    }

    public function local()
    {
        //return view('home');
        if (Auth::check()) {
            $email = Auth::user()->email;
            $gallery = gallery::where('email', $email)->get();
            //dd($gallery);
            return view('user.user', compact('gallery'));
        }
        else 
            return redirect('/');
    }

    public function dropbox()
    {
        //return view('home');
        if (Auth::check()) {
            $email = Auth::user()->email;
            $gallery = DropboxGallery::where('email', $email)->get();
            //dd($gallery);
            return view('user.userDropbox', compact('gallery'));
            /*if (! is_string(Dropbox::getAccessToken())) {
                return redirect(env('DROPBOX_OAUTH_URL'));
            } else {
                return view('user.userDropbox', compact('gallery'));
            }*/
        }
        else 
            return redirect('/');
    }

    public function show($name)
    {
        $gallery = gallery::where('gallery', $name)->first();
        //$path = $gallery->path;
        //dd($gallery->path);
        return view('user.gallery', compact('gallery'));
    }

    public function showDropbox($name)
    {
        $gallery = DropboxGallery::where('gallery', $name)->first();
        $path = $gallery->path;
        $images = Dropbox::files()->listContents($path);
        
        //return view('user.gallery', compact('gallery'));
        foreach ($images['entries'] as $key) {
            $links[] = Dropbox::files()->getTempLink($key['path_display']);
        }
        //dd($links);
        return view('user.galleryDropbox', compact('links','gallery'));

    }

    public function createLink($name)
    {
        $gallery_before = DropboxGallery::where('gallery', $name)->first();
        $path = $gallery_before->path;
        $email = $gallery_before->email;
        $gallery_name = $name;
        $images = Dropbox::files()->listContents($path);
        //dd($images);
        $matchThese = ['gallery' => $gallery_name, 'email' => $email];
        $links_table = shareable_links::select('image_id')->where($matchThese)->get();
        //dd(count($links_table));
        if(count($links_table)>0){
            foreach ($links_table as $item => $value) {
                $img_available[] = str_replace($email.'_'.$gallery_name.'_', '', $value->image_id);
            }
            foreach ($images['entries'] as $key) {
                if(!in_array($key['name'], $img_available)){
                    $links_share[] = Dropbox::files()->getSharedLink($key['path_display']);
                }
                $links[] = Dropbox::files()->getTempLink($key['path_display']);
            }
        }
        elseif(count($links_table)==0){
            foreach ($images['entries'] as $key) {
                $links_share[] = Dropbox::files()->getSharedLink($key['path_display']);
                $links[] = Dropbox::files()->getTempLink($key['path_display']);
            }
        }
        //dd($links);
        foreach ($links_share as $item) {
            $img_link = $item['url'];
            $img_id = $email.'_'.$gallery_name.'_'.$item['name'];

            //Store in db
            $storeInfo = [
                'gallery' => $gallery_name,
                'email' => $email,
                'image_id' => $img_id,
                'link' => $img_link
            ];
            
            //dd($storeInfo);
            $updateInfo = [
                'links_created' => '1'
            ];
            $gallery_before::where('gallery',$gallery_name)->update($updateInfo);

            $galleryInsert = shareable_links::create($storeInfo);
            $gallery = DropboxGallery::where('gallery', $name)->first();
        }
        Session::flash('status', 'Links created successfully.');
        return view('user.galleryDropbox', compact('links','gallery'));

    }

    public function toUpload($name)
    {
        $gallery = DropboxGallery::where('gallery', $name)->first();
        //$path = $gallery->path;
        //dd($gallery->path);
        return view('user.uploadDropbox', compact('gallery'));
    }

    public function uploadImage(Request $req, $name)
    {
        $gallery = DropboxGallery::where('gallery', $name)->first();
        $path = $gallery->path;
        if($req->hasFile('file')) {
            $images = $req->file('file');
            
            foreach ($images as $key) {
                $fileName = $path.'/'.$key->getClientOriginalName();
                $extension = $key->getClientOriginalExtension();
                
                $fileNameTmp = str_replace(' ', '', $path.'/image_'.Carbon::now()->toDayDateTimeString().'_'.rand(11111, 99999) .'.' . $extension);
                Dropbox::files()->upload($path, $fileNameTmp, $key);
                //dd($fileNameTmp);
                //$key->move(public_path('images'), $fileName);
                //Dropbox::files()->delete($path);
                $updateInfo = [
                    'links_created' => '0'
                ];
                $gallery::where('gallery',$name)->update($updateInfo);
                
            }
            
        }
        
        /*elseif(!$req->hasFile('file')) {
            Session::flash('message', 'Please select an image.');
            return view('user.galleryDropbox',compact('gallery'));
        }*/
        //$gallery = DropboxGallery::where('gallery', $name)->get();
        Session::flash('status', 'Image uploaded successfully.');
        //return view('user.userDropbox',compact('gallery'));
        return redirect()->route('gallery.showDropbox', $name);
    }
}
