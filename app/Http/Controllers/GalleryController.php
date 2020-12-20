<?php

namespace App\Http\Controllers;

use App\gallery;
use App\User;
use File;
use Illuminate\Http\Request;

class GalleryController extends Controller
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
        $storeInfo = [
            'gallery' => $request->gallery,
            'email' => $request->email,
            'path' => 'images/'.$request->email.'/'.$request->gallery
        ];
        //dd($storeInfo);
        $updateInfo = [
            'has_gallery' => '1'
        ];
        //dd($request->name);
        $user::where('email',$request->email)->update($updateInfo);
        //$userInfo = UserInfo::get();

        $galleryInsert = gallery::create($storeInfo);
        $galleryInfo = gallery::get();

        $path = public_path().'/images/'.$request->email;
        if (!File::exists($path)){
            File::makeDirectory($path);
            $path2 = public_path().'/images/'.$request->email.'/'.$request->gallery;
            File::makeDirectory($path2);
        }
        elseif (File::exists($path)){
            $path2 = public_path().'/images/'.$request->email.'/'.$request->gallery;
            if (!File::exists($path2)){
                File::makeDirectory($path2);
            }
            elseif (File::exists($path2)){
                return view('user.user')->with('message','Gallery already exists');
            }
        }

        return view('user.upload',compact('galleryInfo'))->with('message','Gallery created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery)
    {
        //
    }
}
