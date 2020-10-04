<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\Product\CategoryCollection;
use App\Http\Resources\Product\CategoryResource;
use App\Repositories\CategoryAPIRepository;

class ProductCategoryController extends Controller
{

    /**
     * @param CategoryAPIRepository $categoryAPIRepository
     * @return CategoryCollection
     */
    public function index(CategoryAPIRepository $categoryAPIRepository)
    {
        $categories = $categoryAPIRepository->get();
        return new CategoryCollection($categories);
    }

    /**
     * @param CategoryRequest $request
     * @param CategoryAPIRepository $categoryAPIRepository
     * @return CategoryResource
     */
    public function store(CategoryRequest $request, CategoryAPIRepository $categoryAPIRepository)
    {
        $category = $categoryAPIRepository->create($request->validated());
        return new CategoryResource($category);
    }

    /**
     * @param $id
     * @param CategoryAPIRepository $categoryAPIRepository
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id, CategoryAPIRepository $categoryAPIRepository)
    {
        $categoryAPIRepository->delete((int)$id);
        return response()->json([], 204);
    }

}
