<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/artwork/{id}', 'App\Http\Controllers\ArtworksController@show');
Route::post('/comment/create', 'App\Http\Controllers\CommentController@commentCreate')->name('comment.create');
Route::post('/comment/edit', 'App\Http\Controllers\CommentController@commentCreate');
Route::get('/comment/{id}/delete', 'App\Http\Controllers\CommentController@commentDelete');
Route::get('/top', 'App\Http\Controllers\ArtworksController@top')->name('top');
Route::get('/end', 'App\Http\Controllers\ArtworksController@end')->name('end');



Auth::routes();
