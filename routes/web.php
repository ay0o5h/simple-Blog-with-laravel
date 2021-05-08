<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

//Route::group(['namespace' => 'blog'],function () {
//    Route::get('/', [])->name('admin.dashboard');

    ######################### Begin Languages Route ########################
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', [PostsController::class,'index'])->name('blog.home');
        Route::get('create', [PostsController::class,'create'])->name('blog.create');
        Route::post('store',  [PostsController::class,'store'])->name('blog.store');
        Route::get('show/{id}',  [PostsController::class,'show'])->name('blog.show');

        Route::get('edit/{id}',  [PostsController::class,'edit'])->name('blog.edit');
        Route::post('update/{id}',  [PostsController::class,'update'])->name('blog.update');

        Route::get('delete/{id}',  [PostsController::class,'destroy'])->name('blog.delete');


    });
//});

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::resource('/blog',PostsController::class);

Auth::routes();

