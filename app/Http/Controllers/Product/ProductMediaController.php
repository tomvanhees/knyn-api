<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\MediaRepository;
use App\Models\Product\Product;
use App\Traits\UsesResource;
use App\Http\Resources\Media\MediaItemResource;
use Illuminate\Support\Facades\Log;

class ProductMediaController extends Controller
{
    use UsesResource;

    public function store(Request $request,MediaRepository $mediaRepository)
    {
        $validated = $request->validate(["product_id" => "required"]);
        $product   = Product::find($validated["product_id"]);

        if ($request->hasFile("image")) {
            foreach ($request->file("image") as $file) {
                $mediaRepository->addProductImage($product,$file);
            }
        }

        return response()->json($this->map(($product->getMedia())),200);
    }

    public function destroy(Request $request,$id,MediaRepository $mediaRepository)
    {
        $mediaRepository->destroy($id);
        return response()->json([],200);
    }

    protected function toResource($resource)
    {
      return (new MediaItemResource($resource))->toArray();
    }
}
