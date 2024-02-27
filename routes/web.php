<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
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

/*Route::get('/user/{Hilya}', function ($name) {
    return 'Hilyatul Jannah '.$name;
    }); */
    
Route::get('/posts/{post}/comments/{comment}', function
    ($postId, $commentId) {
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });

Route::get('/articles/{id}', function ($articleId) {
     return 'Halaman Artikel dengan ID - '.$articleId;
    });

Route::get('/user/{name?}', function ($name='John') {
        return 'Nama saya '.$name;
});

Route:: get('/hello', [WelcomeController::class, 'hello']);

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{$id}', [PageController::class, 'articles']);

Route::resource('photo', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);
   Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);

/*Route::get('/greeting', function() {
    return view('blog.hello', ['name' => 'Hilyatul Jannah']);
});*/

Route::get('/greeting', [WelcomeController::class, 'greeting']);



