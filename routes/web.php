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
    

    $dc_products = config('cards');
    $marketing = config('markets');
    $lists= config('lists');
    $socials= config('socials');


    return view('home', ['cards'=>$dc_products, 'markets' => $marketing, 'lists' => $lists, 'socials' => $socials]);
})->name("home");

Route::get('/personaggi', function () {
    return view('characters');
})->name("characters");

Route::get('/comics', function () {
    return view('comics');
})->name("comics");

Route::get('/film', function () {
    return view('movie');
})->name("movie");

Route::get('/tv', function () {
    return view('tv');
})->name("tv");

Route::get('/giochi', function () {
    return view('games');
})->name("games");

Route::get('/collezionabilli', function () {
    return view('collectibles');
})->name("collectibles");

Route::get('/video', function () {
    return view('videos');
})->name("videos");

Route::get('/fans', function () {
    return view('fans');
})->name("fans");

Route::get('/novità', function () {
    return view('news');
})->name("news");

Route::get('/shop', function () {
    return view('shop');
})->name("shop");
