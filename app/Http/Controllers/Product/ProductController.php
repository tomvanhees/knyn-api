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

class ProductController extends Controller
{
    use UsesResource;

    public function index()
    {
        $products = Product::fromAuth()->with("brand","categories")->get();

        return response()->json($this->map($products),200);
    }


    public function store(Request $request)
    {
        $data = json_decode($request->product,TRUE);

        $validator = Validator::make($data,[
            "name"        => "required|max:191",
            "description" => "",
            "brand_id"    => "",
            "price"       => "max:191",
            "categories"  => ""
        ]);


        if ($validator->fails()) {
            return response()->json("",401);
        } else {
            $validated = $validator->validated();
        }


        $created_product = Product::create([
                                               "user_id"     => Auth::id(),
                                               "name"        => $validated['name'],
                                               "slug"        => Str::slug($validated['name']),
                                               "description" => $validated['description'],
                                               "brand_id"    => $validated['brand_id'],
                                               "price"       => $validated['price']
                                           ]);

        if ($request->hasFile("image")){
            foreach ($request->file("image") as $file) {
                $created_product->addMedia($file)->toMediaCollection();
            }
        }


        $created_product->categories()->sync(data_get($validated["categories"], "*.id"));

        return response()->json("",200);
    }


    public function show($id)
    {
        $product = Product::fromAuth()->where("id",$id)->with("brand","categories")->first();
        return response()->json($this->toResource($product),200);
    }

    protected function toResource($resource)
    {
        return (new ProductResource($resource))->toArray();
    }
}
