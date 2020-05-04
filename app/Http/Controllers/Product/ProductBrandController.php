<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\ProductBrand;
use Illuminate\Support\Facades\Auth;

class ProductBrandController extends Controller
{
    public function index(Request $request)
    {
        $brands = ProductBrand::where("user_id",Auth::id())->get();

        return response()->json($brands,200);

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
                                            "name" => "required|max:191"
                                        ]);

        $brand = ProductBrand::create([
                                          "name"    => $validated["name"],
                                          "user_id" => Auth::id()
                                      ]);

        return response()->json($brand,200);
    }
}
