<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Repositories\GalleryRepository;
use Illuminate\Support\Facades\Auth;

class GalleryMediaController extends Controller
{
    public function store(Request $request,$gallery_id, GalleryRepository $galleryRepository)
    {

        Log::debug($request->file("image"));

       $media = $galleryRepository->addMediaFiles($request->file("image"), $gallery_id, Auth::id());
        Log::debug('controller');
       Log::debug($media);
        return response()->json($media,200);
    }
}
