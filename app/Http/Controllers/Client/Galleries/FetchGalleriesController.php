<?php

namespace App\Http\Controllers\Client\Galleries;

use App\Http\Controllers\Controller;
use App\Repositories\GalleryAPIRepository;
use Illuminate\Http\Request;

class FetchGalleriesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param GalleryAPIRepository $APIRepository
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request, GalleryAPIRepository $APIRepository)
    {
       $galleries = $APIRepository->get();

       return response()->json(['content' => $galleries], 200);
    }
}
