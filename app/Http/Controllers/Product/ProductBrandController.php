<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\ProductBrand;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Product\BrandResource;
use App\Traits\UsesResource;

class ProductBrandController extends Controller
{
    use UsesResource;

    public function index(Request $request)
    {
        $brands = ProductBrand::fromAuth()->get();

        return response()->json($this->map($brands),200);

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
                                            "content.name" => "required|max:191"
                                        ]);

        $brand = ProductBrand::create([
                                          "name"    => $validated["content"]["name"],
                                          "user_id" => Auth::id()
                                      ]);

        return response()->json($this->toResource($brand),200);
    }


    public function destroy($id)
    {

        ProductBrand::find($id)->delete();

        return response()->json([],200);
    }

    protected function getResource($resource)
    {
        return new BrandResource($resource);
    }
}
