<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [PageController::class, 'showHome'])->name('home');
// Route::get('/user/{id}', [PageController::class, 'showUser'])->name('user');
// Route::get('/blog', [PageController::class, 'showBlog'])->name('blog');


//Grouping Controllers

Route::controller(PageController::class)->group(function(){
    Route::get('/', 'showHome')->name('home');
    Route::get('/user/{id}', 'showUser')->name('user');
    Route::get('/blog', 'showBlog')->name('blog');
});

Route::get('/test', TestingController::class);

