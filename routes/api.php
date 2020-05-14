<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gallery\GalleryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Gallery\GalleryMediaController;
use App\Http\Controllers\Product\ProductBrandController;
use App\Http\Controllers\Product\ProductCategoryController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\ProductMediaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Information\InformationController;
use App\Http\Controllers\Auth\LogoutController;

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

Route::prefix("v1")->group(function () {

    Route::post("/user/store",[RegisterController::class,"register"]);
    Route::post("/user/login",[LoginController::class,"login"]);
    Route::post("/user/logout",[LogoutController::class,"logout"]);


    Route::middleware('auth:sanctum')->group(function () {
        Route::patch("/gallery/{gallery_id}/media",[GalleryMediaController::class,"update"]);
        Route::delete("/gallery/{gallery_id}/media/{media_id}",[GalleryMediaController::class,"destroy"]);

        Route::get("/gallery",[GalleryController::class,"index"]);
        Route::post("/gallery",[GalleryController::class,"store"]);
        Route::get("/gallery/{id}",[GalleryController::class,"show"]);
        Route::patch("/gallery/{id}",[GalleryController::class,"update"]);
        Route::delete("/gallery/{id}",[GalleryController::class,"destroy"]);


        Route::get("/product/brands",[ProductBrandController::class,"index"]);
        Route::post("/product/brands",[ProductBrandController::class,"store"]);
        Route::delete("/product/brands/{id}",[ProductBrandController::class,"destroy"]);

        Route::get("/product/categories",[ProductCategoryController::class,"index"]);
        Route::post("/product/categories",[ProductCategoryController::class,"store"]);
        Route::delete("/product/categories/{id}",[ProductCategoryController::class,"destroy"]);

        Route::patch("/product/{product_id}/media",[ProductMediaController::class,"store"]);
        Route::delete("/product/{product_id}/media/{media_id}",[ProductMediaController::class,"destroy"]);

        Route::get("/product",[ProductController::class,"index"]);
        Route::post("/product",[ProductController::class,"store"]);
        Route::get("/product/{id}",[ProductController::class,"show"]);
        Route::patch("/product/{id}",[ProductController::class,"update"]);
        Route::delete("/product/{id}",[ProductController::class,"destroy"]);


        Route::get("/information",[InformationController::class,"index"]);
        Route::post("/information",[InformationController::class,"store"]);
    });
});
