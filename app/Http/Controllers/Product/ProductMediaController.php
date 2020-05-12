<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\MediaRepository;
use App\Models\Product\Product;
use App\Traits\UsesResource;
use App\Http\Resources\Media\MediaItemResource;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\Media\ProductMediaResource;
use Illuminate\Support\Facades\Cache;
use function foo\func;

class ProductMediaController extends Controller
{
    public function store(Request $request, $product_id)
    {
        $product   = Cache::remember(`product_${product_id}`, now()->addMinutes(2), function() use ($product_id){
           return Product::find($product_id);
        });

        if ($request->hasFile("image")) {
                $product->addMedia($request->file("image"))->toMediaCollection();
        }

        return response()->json([],200);
    }

    public function destroy($product_id, $media_id,MediaRepository $mediaRepository)
    {
        $mediaRepository->destroy($media_id);
        return response()->json([],200);
    }
}
