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
use App\Repositories\MediaRepository;
use Illuminate\Support\Facades\Cache;
use App\Http\Resources\Media\GalleryMediaResource;

class GalleryMediaController extends Controller
{
    use UsesResource;


    public function show($id){

    }

    /**
     * @param Request $request
     * @param $gallery_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $gallery_id)
    {
        $gallery = Gallery::find($gallery_id);

//        $gallery =  Cache::remember(`gallery_${gallery_id}`, now()->addMinutes(2), function () use ($gallery_id){
//            return Gallery::find($gallery_id);
//        });


        if ($request->hasFile("image")) {
            $mediaItem =   $gallery
                ->addMedia($request->file("image"))
                ->toMediaCollection();
        }

        return response()->json($this->toResource($mediaItem),200);
    }


    public function destroy($gallery_id, $media_id,MediaRepository $mediaRepository)
    {
        $mediaRepository->destroy($media_id);

        return response("success",200);
    }

    protected function getResource($resource)
    {
        return new GalleryMediaResource($resource);
    }
}
