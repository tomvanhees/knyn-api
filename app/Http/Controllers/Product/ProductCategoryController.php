<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\ProductCategory;
use Illuminate\Support\Facades\Auth;

class ProductCategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = ProductCategory::where("user_id",Auth::id())->get();

        return response()->json($categories,200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
                                            "name" => "required|max:191"
                                        ]);

        $category = ProductCategory::create([
                                                "name"    => $validated["name"],
                                                "user_id" => Auth::id()
                                            ]);

        return response()->json($category,200);
    }
}
