<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Repositories\GalleryRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Traits\UsesResource;
use App\Models\Gallery\Gallery;
use App\Http\Resources\Media\MediaResource;
use App\Http\Resources\Media\MediaItemResource;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class GalleryMediaController extends Controller
{
    use UsesResource;

    public function store(Request $request)
    {
        $validator = Validator::make($request->toArray(),[
            "gallery" => "required"
        ]);

        if ($validator->fails()){
            return response()->json([],403);
        }else{
            $validated = $validator->validated();
        }

        $gallery = Gallery::find($validated["gallery"]);

        if ($request->hasFile("image")){
            foreach ($request->file("image") as $file) {
                $gallery->addMedia($file)->toMediaCollection();
            }
        }


        return response()->json($this->map(($gallery->getmedia())),200);
    }


    public function destroy(Request $request,$id)
    {
        Media::find($id)->delete();

        return response("success",200);
    }

    protected function toResource($resource)
    {
     return (new MediaItemResource($resource))->toArray();
    }
}
