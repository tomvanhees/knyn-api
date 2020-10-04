<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductCollection;
use App\Repositories\ProductAPIRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Product\ProductResource;
use App\Traits\UsesResource;
use Illuminate\Support\Arr;
use App\Repositories\MediaRepository;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    /**
     * @param Request $request
     * @param ProductAPIRepository $productRepository
     * @return ProductCollection
     */
    public function index(Request $request, ProductAPIRepository $productRepository)
    {
        $products = $productRepository->get($request->get('page') ?? 1, $request->get('brands') ?? [], $request->get('categories') ?? []);
        return new ProductCollection($products);
    }

    /**
     * @param ProductRequest $request
     * @param ProductAPIRepository $productRepository
     * @return ProductResource
     */
    public function store(ProductRequest $request, ProductAPIRepository $productRepository)
    {

        $product = $productRepository->create($request->validated());
        return new ProductResource($product);
    }

    /**
     * @param $id
     * @param ProductAPIRepository $productRepository
     * @return ProductResource
     */
    public function show($id, ProductAPIRepository $productRepository)
    {
        $product = $productRepository->find($id);
        return new  ProductResource($product);
    }

    /**
     * @param ProductRequest $request
     * @param $id
     * @param ProductAPIRepository $productRepository
     * @return JsonResponse
     */
    public function update(ProductRequest $request, $id, ProductAPIRepository $productRepository)
    {
        $productRepository->update($request->validated(), $id);
        return response()->json(['message' => ''], 200);
    }


    public function destroy($id, ProductAPIRepository $APIRepository)
    {

        $APIRepository->delete($id);
        return response()->json([], 200);
    }
}
