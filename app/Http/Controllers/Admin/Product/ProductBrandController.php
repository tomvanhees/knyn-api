<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Http\Resources\Product\BrandCollection;
use App\Http\Resources\Product\BrandResource;
use App\Repositories\BrandAPIRepository;
class ProductBrandController extends Controller
{
    /**
     * @param BrandAPIRepository $brandAPIRepository
     * @return BrandCollection
     */
    public function index(BrandAPIRepository $brandAPIRepository)
    {
        $brands = $brandAPIRepository->get();
        return new BrandCollection($brands);

    }

    /**
     * @param BrandRequest $request
     * @param BrandAPIRepository $brandAPIRepository
     * @return BrandResource
     */
    public function store(BrandRequest $request, BrandAPIRepository $brandAPIRepository)
    {
        $brand = $brandAPIRepository->create($request->validated());
        return new BrandResource($brand);
    }

    /**
     * @param $id
     * @param BrandAPIRepository $brandAPIRepository
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id, BrandAPIRepository $brandAPIRepository)
    {
        $brandAPIRepository->delete($id);
        return response()->json([], 204);
    }

}
