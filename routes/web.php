<?php

use App\Http\Controllers\PostController;
use App\Http\Middleware\CheckRoleMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/post',[PostController::class,'index'])->name('post.index');
Route::post('/handlepost',[PostController::class,'store'])->name('post.store');


//Applying middleware to routes
// Route::get('/post',[PostController::class,'index'])->name('post.index');
// Route::post('/handlepost',[PostController::class,'store'])->name('post.store')->middleware(CheckRoleMiddleware::class);

//Testing the middleware to group routes

// Route::group([
//     'prefix' => 'post',
//     'middleware' => CheckRoleMiddleware::class,
// ], function () {
//     Route::get('/post', [PostController::class, 'index'])->name('post.index');
//     Route::post('/handlepost', [PostController::class, 'store'])->name('post.store');
// });


//Using middleware groups

//  Route::get('/post',[PostController::class,'index'])->name('post.index');
// Route::post('/handlepost',[PostController::class,'store'])->name('post.store')->middleware('testgroup');