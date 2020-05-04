<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gallery\GalleryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Gallery\GalleryMediaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user',function (Request $request) {
    return $request->user();
});


Route::prefix("v1")->group(function () {

    Route::post("/user/store",[RegisterController::class,"register"]);

    Route::middleware('auth:sanctum')->group(function () {
        Route::get("/gallery",[GalleryController::class,"index"]);
        Route::post("/gallery",[GalleryController::class,"store"]);
        Route::get("/gallery/{id}",[GalleryController::class,"show"]);
        Route::patch("/gallery/{id}",[GalleryController::class,"update"]);

        Route::patch("/gallery/media",[GalleryMediaController::class,"store"]);
        Route::delete("/gallery/media/{id}", [GalleryMediaController::class, "destroy"]);

    });
});
