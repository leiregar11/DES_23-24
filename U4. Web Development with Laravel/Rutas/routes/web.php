<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::name("home.")->group(function(){
    Route::get('/', function () {
        return "home";})->name("index");

    Route::get('/contact', function () {
        return "contact";})->name("contact");
});

Route::prefix('posts')->name("post.")->group(function(){

Route::get('{days_ago?}', [PostController::class,'viewDays'])->where(['hace_dias'=>'[0-9]+'])->name("recent");

Route::get('{id?}', [PostController::class,'viewId'] )->name("show");
// Route::get('/posts/{id?}', [PostController::class,'viewId'] )->where(['id'=>'A-Za-z'])->name("posts.show");
});

