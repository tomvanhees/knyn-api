<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where("user_id",Auth::id())->get();

        return response()->json($products,200);
    }

    public function store(Request $request)
    {
        $data = json_decode($request->product,TRUE);


        $validator = Validator::make($data,[
            "name"        => "required|max:191",
            "description" => "",
            "brand_id"    => "",
            "price"       => "max:191"
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

        foreach ($request->image as $file) {
            $created_product->addMedia($file)->toMediaCollection();
        }

        $created_product->categories()->sync($validated['categories']);

        return response()->json("",200);
    }
}
