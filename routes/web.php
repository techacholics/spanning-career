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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('/post-job', [App\Http\Controllers\HomeController::class, 'postJob'])->name('post-job')->middleware('verified');
Route::get('/user-profile', [App\Http\Controllers\UserController::class,'index'])->name('user-profile')->middleware('verified');
Route::get('/edit-profile', [App\Http\Controllers\UserController::class,'show'])->name('edit-profile')->middleware('verified');
Route::get('/job-post', [App\Http\Controllers\PostController::class,'index'])->name('job-post')->middleware('verified');
Route::get('/home', [App\Http\Controllers\UserController::class,'home'])->name('home')->middleware('verified');
Route::get('/view-job', [App\Http\Controllers\PostController::class,'viewjob'])->name('view-job')->middleware('verified');