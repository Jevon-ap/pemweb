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

Route::get('/', function () {
    return view('home',[
        "title"=>"Halaman Home",
        "name"=>"Jevon Ariel Putra",
        "jurusan"=>"Teknik informatika"
    ]);
});
Route::get('/hello/{name}', function () {
    return view('greet');
});

Route::view('/hello', 'greet');

Route::get('/article', function () {
    return view('article',[
        "title"=>"Halaman About"
    ]);
});

Route::get('/deck', function () {
    return view('deck',[
        "title"=>"Halaman Deck"
    ]);
});

