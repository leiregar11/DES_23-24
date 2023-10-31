<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;

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

Route::get('/', [NameController::class , "index"])->name("index");

Route::name("name.")->group(function(){
Route::get("/NameForm", [NameController::class , "showNameForm"])->name("form");
Route::post("/NameForm/{name?}", [NameController::class , "getName"])->name("getForm");
});

Route::name("age.")->group(function(){
    Route::get("/AgeForm", [NameController::class , "showNameAge"])->name("form");
    Route::post("/AgeForm/{age?}", [NameController::class , "getAge"])->name("getForm");
    });
    // Route::post("/UserInfo",[NameController::class ,"showInfo"])->name("showInfo");