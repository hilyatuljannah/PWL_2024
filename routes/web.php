<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
   });

Route::get('/world', function () {
    return 'World';
   });
   
Route::get('/', function () {
    return 'Selamat Datang';
   });

Route::get('/about', function () {
    return 'Nama : Hilyatul Jannah, <br> NIM : 2341728018';
   });

Route::get('/user/{Hilya}', function ($name) {
    return 'Hilyatul Jannah '.$name;
    });
    
Route::get('/posts/{post}/comments/{comment}', function
    ($postId, $commentId) {
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });
