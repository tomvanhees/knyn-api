<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\ProductCategory;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Product\CategoryResource;
use App\Traits\UsesResource;

class ProductCategoryController extends Controller
{
    use UsesResource;

    public function index(Request $request)
    {
        $categories = ProductCategory::fromAuth()->get();

        return response()->json($this->map($categories),200);
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

        return response()->json($this->toResource($category),200);
    }

    protected function toResource($category){
        return (new CategoryResource($category))->toArray();
    }
}
