<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
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
    use UsesResource;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $products = Product::fromAuth()->with("brand", "categories")->get();

        return response()->json($this->map($products), 200);
    }

    /**
     * @param ProductRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ProductRequest $request)
    {

        $product = Product::create($this->createProduct($request->all()));
        $this->syncCategories($product, $request->all());

        return response()->json([
            "product" => [
                "id" => $product->id
            ],
            "message" => [
                "success" => "Product is toegevoegd"
            ]
        ], 200);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $product = Product::fromAuth()->where("id", $id)->with("brand", "categories")->first();
        return response()->json($this->toResource($product), 200);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        Log::debug($request);
        $validated = $request->validate($this->validationRules());
        Log::debug($validated);
        $product = Product::find($id);
        $product->update([
            "name" => $validated["data"]['name'],
            "slug" => Str::slug($validated["data"]['name']),
            "description" => $validated["data"]['description'],
            "price" => $validated["data"]['price'],
            "brand_id" => $validated["data"]["brand"]["0"]['id']
        ]);

        $this->syncCategories($product, $validated);

        return response()->json([], 200);
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $product->clearMediaCollection();
        $product->delete();

        return response()->json([], 200);
    }


    /**
     * @param Product $product
     * @param array $validated
     */
    private function syncCategories(Product $product, array $validated)
    {
        $product->categories()->sync(data_get($validated["categories"], "*.id"));
    }

    /**
     * @return array|string[]
     */
    private function validationRules(): array
    {
        return [
            "data.name" => "required|max:191",
            "data.description" => "",
            "data.brand.id" => "",
            "data.price" => "max:191",
            "data.categories" => ""
        ];
    }

    /**
     * @param array $validated
     * @return array
     */
    private function createProduct(array $validated): array
    {
        return [
            "user_id" => Auth::id(),
            "name" => $validated['name'],
            "slug" => Str::slug($validated['name']),
            "description" => $validated['description'],
            "brand_id" => $validated['brand_id'],
            "price" => $validated['price']
        ];
    }

    /**
     * @param $resource
     */
    protected function getResource($resource)
    {
        return new ProductResource($resource);
    }
}
