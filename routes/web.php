<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('index');
});

Route::get('/demo', function () {
    return view('example');
});

/*Route::get('/login', function () {
    return view('login');
});

Route::get('/reg', function () {
    return view('register');
});

Route::get('/user', function () {
    return view('user/user');
});*/

Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/local', 'HomeController@local')->name('local');
Route::get('/dropbox', 'HomeController@dropbox')->name('dropbox');
Route::get('/gallery/{name}', 'HomeController@show')->name('gallery.show');
Route::get('/galleryDropbox/{name}', 'HomeController@showDropbox')->name('gallery.showDropbox');
Route::get('/create/{name}', 'HomeController@createLink')->name('createlink');

Route::get('/uploadDropbox/{name}', 'HomeController@toUpload')->name('toUpload');
Route::get('/uploadImage/{name}', 'HomeController@uploadImage')->name('uploadImage');

/*Route::get('/home', function(Request $request)
{
	if (Auth::check()) {
		return view('user/user');
	}
	else 
		return redirect('/');
});

Route::get('home/oauth', function(){
    return Dropbox::connect();
});
/*Route::group(['middleware' => ['web', 'auth']], function() { 

    Route::get('/dropbox', function(){
        if (! is_string(Dropbox::getAccessToken())) {
            return redirect(env('DROPBOX_OAUTH_URL'));
        } else {
            //display your details
            return Dropbox::post('users/get_current_account');
        }
    });

});*/

Route::resource('/upload','GalleryController');
Route::resource('/uploadDropbox','DropboxGalleryController');