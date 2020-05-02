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
       $media = $galleryRepository->addMediaFiles($request->file("image"), $gallery_id);

        return response()->json($media,200);
    }
}
