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

Route::get("/api/video/{category}", "App\Http\Controllers\VideosController@getVideoCategory")->middleware("cors");
Route::get("/api/id/{id}", "App\Http\Controllers\VideosController@getVideoId")->middleware("cors");

