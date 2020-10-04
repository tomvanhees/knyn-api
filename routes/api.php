<?php

//use App\Http\Controllers\Auth\RegisterTenantController;
use App\Http\Controllers\Admin\Media\DestroyMediaController;
use App\Http\Controllers\Client\Galleries\FetchGalleriesController;
use App\Http\Controllers\Tenant\GetTenantController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Gallery\GalleryController;

//use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\Gallery\GalleryMediaController;
use App\Http\Controllers\Admin\Product\ProductBrandController;
use App\Http\Controllers\Admin\Product\ProductCategoryController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Product\ProductMediaController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Admin\Information\InformationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Admin\Feedback\QuestionsController;

//use App\Http\Controllers\Statistics\StatisticsController;
use App\Http\Controllers\Admin\Feedback\AnswersController;

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

Route::prefix("v1/admin")->group(function () {

    Route::post("/user/login", [LoginController::class, "login"],);
    Route::post("/user/logout", [LogoutController::class, "logout"]);
    /**
     * Gallery
     */
    Route::middleware("auth:sanctum")->group(function () {
        Route::get("/gallery", [GalleryController::class, "index"]);
        Route::post("/gallery", [GalleryController::class, "store"]);
        Route::get("/gallery/{id}", [GalleryController::class, "show"]);
        Route::patch("/gallery/{id}", [GalleryController::class, "update"]);
        Route::delete("/gallery/{id}", [GalleryController::class, "destroy"]);

        Route::patch("/gallery/{gallery_id}/media", [GalleryMediaController::class, "update"]);
        Route::delete("/gallery/{gallery_id}/media/{media_id}", [GalleryMediaController::class, "destroy"]);

    });

    /**
     * Information
     */
    Route::middleware("auth:sanctum")->group(function () {
        Route::get("/information", [InformationController::class, "index"]);
        Route::post("/information", [InformationController::class, "store"]);
    });


    /** Feedback*/
    Route::middleware("auth:sanctum")->group(function () {
        Route::get("/feedback/questions", [QuestionsController::class, "index"]);
        Route::post("/feedback/questions", [QuestionsController::class, "store"]);
        Route::get("/feedback/questions/{id}", [QuestionsController::class, "show"]);
        Route::patch("/feedback/questions/{id}", [QuestionsController::class, "update"]);
        Route::delete("/feedback/questions/{id}", [QuestionsController::class, "destroy"]);


//        Route::get("/feedback/answers", [AnswersController::class, "index"]);
//        Route::post("/feedback/answers", [AnswersController::class, "store"]);
    });


    /**
     * Media
     */
    Route::middleware("auth:sanctum")->group(function () {
        Route::delete("/media/{id}", DestroyMediaController::class);
    });


    /**
     * Products
     */
    Route::middleware("auth:sanctum")->group(function () {
        Route::get("/product", [ProductController::class, "index"]);
        Route::get("/product/brands", [ProductBrandController::class, "index"]);
        Route::post("/product/brands", [ProductBrandController::class, "store"]);
        Route::delete("/product/brands/{id}", [ProductBrandController::class, "destroy"]);

        Route::get("/product/categories", [ProductCategoryController::class, "index"]);
        Route::post("/product/categories", [ProductCategoryController::class, "store"]);
        Route::delete("/product/categories/{id}", [ProductCategoryController::class, "destroy"]);

        Route::patch("/product/{product_id}/media", [ProductMediaController::class, "store"]);
        Route::delete("/product/{product_id}/media/{media_id}", [ProductMediaController::class, "destroy"]);


        Route::post("/product", [ProductController::class, "store"]);
        Route::get("/product/{id}", [ProductController::class, "show"]);
        Route::patch("/product/{id}", [ProductController::class, "update"]);
        Route::delete("/product/{id}", [ProductController::class, "destroy"]);
    });




//        Route::post("/tenant", [RegisterTenantController::class, "register"]);
//    Route::post("/user/store",[RegisterController::class,"register"]);
//

});


Route::prefix('v1/client')->group(function(){
    Route::get('galleries', FetchGalleriesController::class);
});

//        Route::get("/feedback/questions",[QuestionsController::class,"index"]);
//        Route::post("/feedback/questions",[QuestionsController::class,"store"]);
//        Route::get("/feedback/questions/{id}",[QuestionsController::class,"show"]);
//        Route::patch("/feedback/questions/{id}",[QuestionsController::class,"update"]);
//        Route::delete("/feedback/questions/{id}",[QuestionsController::class,"destroy"]);
//
//
//        Route::get("/feedback/answers",[AnswersController::class,"index"]);
//        Route::post("/feedback/answers",[AnswersController::class,"store"]);
//
//        Route::get("/statistics",[StatisticsController::class,"index"]);

