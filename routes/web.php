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
    return view('welcome');
});

Route::get('halo', function () {
    //bisa diisi program apa saja
    return "Halo apa kabar?";
});

Route::get('halo2', function () {
    return "<h1> Halo apa kabar? </h1>";
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('layout', function () {
    return view('layout');
});

Route::get('welcomereal', function () {
    return view('welcomereal');
});

Route::get('hello', function () {
    return view('hello');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('link', function () {
    return view('link');
});

Route::get('mystyle', function () {
    return view('mystyle');
});

Route::get('responsive', function () {
    return view('responsive');
});

Route::get('responsive2', function () {
    return view('responsive2');
});

Route::get('style', function () {
    return view('style');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('blogmaster', function () {
    return view('home');
});

Route::get('/blogmaster/tentang', function () {
    return view('tentang');
});

Route::get('/blogmaster/kontak', function () {
    return view('kontak');
});

