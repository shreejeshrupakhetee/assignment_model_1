<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\PostController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('post-recycles',[PostController::class,'recycle'])->name('post.recycle');
Route::post('restore/{id}', [PostController::class, 'restore'])->name('post.restore');
Route::delete('permanent/delete/{id}', [PostController::class, 'forceDelete'])->name('post.forceDelete');
Route::resource('post',PostController::class);
