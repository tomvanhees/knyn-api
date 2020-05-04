<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Repositories\GalleryRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GalleryMediaController extends Controller
{
    public function store(Request $request,GalleryRepository $galleryRepository)
    {
        $validator = Validator::make($request->toArray(),[
            "gallery" => "required"
        ]);

        if ($validator->fails()){
            return response()->json([],403);
        }

        $media = $galleryRepository->addMediaFiles($request->file("image"),$request->gallery);
        return response()->json($media,200);
    }


    public function destroy(Request $request,$id,GalleryRepository $galleryRepository)
    {
        $galleryRepository->deleteMedia($id);

        return response("success",200);
    }
}
