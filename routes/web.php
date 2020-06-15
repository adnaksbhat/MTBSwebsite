<?php

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
use App\booking;
use App\movie;
use App\theatre;
use App\user;
Route::view('/','index');
// Route::post('/login', 'movieController@login');
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/register', function () {
//      return view('main');
// });
Route::get('/contact', function () {
     return view('contact');
});
Route::get('/news', function () {
     return view('news');
});

Route::view('/register','register');
// Route::post('/reg','movieController@reg');
// Route::post('/add','movieController@add');
// // Route::get('/main', function () {
// //     return view('main');
// // });
Route::get('/genre', function () {
    return view('genre');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/awards', function () {
    return view('awards');
});
Route::get('/imdb', function () {
    return view('imdb');
});
Route::get('/navhome', function () {
    return view('main');
});


Route::get('/ok', function () {
    return view('adminhome');
});


Route::get('/navindex', function () {
    return view('index');
});
Route::get('/navback', function () {
    return view('admin_login');
});

Route::get('/navback2', function () {
    return view('main');
});
Route::get('/navback3', function () {
    return view('awards');
});
Route::get('/navplus', function () {
    return view('help');
});
Route::get('/oscars', function () {
    return view('oscars');
});
Route::get('/emmy', function () {
    return view('emmy');
});
Route::get('/iifa', function () {
    return view('iifa');
});
Route::get('/grammy', function () {
    return view('grammy');
});
Route::get('/action', function () {
    return view('action');
});
// ///////////////////////////////////////////////////////////////////////
///////////////////admin////////////////////////////////////////////

Route::view('admin_login','admin_login');
Route::post('/adminLogin','movieController@adminLogin');




Route::view('register','register');
Route::post('/store',"userController@store");















Route::view('/adminhome','adminhome');

Route::view('/addmovies','addmovies');
Route::post('/add_movie','movieController@add_movie');


Route::view('/addtheatre','addtheatre');
Route::post('/add_theatre','movieController@add_theatre');

Route::get('/viewmovies','movieController@viewmovies');
Route::get('/viewtheatre','movieController@viewtheatre');

Route::view('/addsongs','addsongs');
Route::post('/addSongs','movieController@add_songs');

Route::get('/viewbooking','movieController@viewbooking');

Route::get('/viewbooking/{id}','movieController@cancel');
/////////////////////////////////////////////////////////////////////
//////////////////user///////////////////////////////////////////////


Route::get('/newdetails/{uid}/{mid}/{tid}','movieController@newdetails');


Route::post('/reg','userController@reg');
Route::post('/login','userController@login');
Route::get('/book','userController@book');
Route::get('/book/{id}','userController@booking');
Route::post('/bookNow','userController@bookNow');
Route::view('/main','main');
