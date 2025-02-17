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


Route::get('/hello', function () {
 return 'Hello World';
});
Route::get('/world', function () {
    return 'World';
   });

   Route::get('/user/{AustrriechArgono}', function ($Austrriech) {
    return 'Nama saya ' . $Austrriech;
   });

   Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) {
 return 'Pos ke-'.$postId = '2'." Komentar ke-: ".$commentId = '1';
});
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });


