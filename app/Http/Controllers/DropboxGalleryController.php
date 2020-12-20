<?php

namespace App\Http\Controllers;

use App\DropboxGallery;
use Illuminate\Http\Request;
use App\User;
use File;

use Dcblogdev\Dropbox\Facades\Dropbox;
use Illuminate\Support\Facades\Session;

class DropboxGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $path = $request->email;
        $gallery_rows = DropboxGallery::where('gallery', $request->gallery);

        if($gallery_rows->count() == 0){
            $files = Dropbox::files()->listContents('');
            foreach ($files['entries'] as $key) {
                if($path != $key['name']){
                    Dropbox::files()->createFolder($path);
                    $path2 =$request->email.'/'.$request->gallery;
                    Dropbox::files()->createFolder($path2);
                    //Store in db
                    $storeInfo = [
                        'gallery' => $request->gallery,
                        'email' => $request->email,
                        'path' => $request->email.'/'.$request->gallery
                    ];
                    //dd($storeInfo);
                    $updateInfo = [
                        'has_dropboxGallery' => '1'
                    ];
                    $user::where('email',$request->email)->update($updateInfo);

                    $galleryInsert = DropboxGallery::create($storeInfo);
                    $gallery = DropboxGallery::where('gallery', $request->gallery)->first();

                    return view('user.uploadDropbox',compact('gallery'))->with('message','Gallery created successfully');
                }
                elseif($path == $key['name']) {
                    $path2 =$request->email.'/'.$request->gallery;
                    //Dropbox::files()->createFolder($path2);
                    $folderInDir = $request->gallery;
                    $filesInDir = Dropbox::files()->listContents($path);
                    foreach ($filesInDir['entries'] as $folder) {
                        if($folderInDir != $folder['name']){
                            Dropbox::files()->createFolder($path2);
                            //Store in db
                            $storeInfo = [
                                'gallery' => $request->gallery,
                                'email' => $request->email,
                                'path' => $request->email.'/'.$request->gallery
                            ];
                            //dd($storeInfo);
                            $updateInfo = [
                                'has_dropboxGallery' => '1'
                            ];
                            $user::where('email',$request->email)->update($updateInfo);

                            $galleryInsert = DropboxGallery::create($storeInfo);
                            $gallery = DropboxGallery::where('gallery', $request->gallery)->first();
                            Session::flash('message', 'Gallery created successfully.');
                            return view('user.uploadDropbox',compact('gallery'));
                        }
                        /*elseif($folderInDir == $folder['name']){
                            return view('user.userDropbox',compact('gallery'))->with('message','Gallery already exists');
                        }*/
                    }
                }
            }
        }
        elseif($gallery_rows->count() > 0) {
            $gallery = DropboxGallery::where('gallery', $request->gallery)->get();
            //dd($gallery);
            Session::flash('message', 'Gallery already exists! Try a different name.');
            return view('user.userDropbox',compact('gallery'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DropboxGallery  $dropboxGallery
     * @return \Illuminate\Http\Response
     */
    public function show(DropboxGallery $dropboxGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DropboxGallery  $dropboxGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(DropboxGallery $dropboxGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DropboxGallery  $dropboxGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DropboxGallery $dropboxGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DropboxGallery  $dropboxGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(DropboxGallery $dropboxGallery)
    {
        //
    }
}
