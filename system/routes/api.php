<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
// */

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("/","YoutubeController@index");
Route::get("/get/{id}","YoutubeController@get");
Route::put("/updatedata/{id}","YoutubeController@updatedata");
Route::post("/insertdata", "YoutubeController@insertdata");
Route::delete("/delete/{id}", "YoutubeController@delete");

    
