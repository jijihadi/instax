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
    return redirect('login');
});

Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('add-post', [App\Http\Controllers\PostController::class, 'store'])->name('add-post');
    Route::post('like', [App\Http\Controllers\LikeController::class, 'store'])->name('like');
    Route::post('comment', [App\Http\Controllers\CommentController::class, 'store'])->name('comment');

    Route::get('/signout', function () { Auth::logout(); return redirect('/login'); })->name('signout');
});

Route::group(['middleware' => ['auth', 'isAdmin']], function () {
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
});
