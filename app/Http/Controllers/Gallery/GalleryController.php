<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery\Gallery;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Repositories\GalleryRepository;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param GalleryRepository $galleryRepository
     * @return JsonResponse
     */
    public function index(Request $request, GalleryRepository $galleryRepository)
    {
        $galleries = $galleryRepository->get(Auth::id());

        return response()->json($galleries,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param GalleryRepository $galleryRepository
     * @return JsonResponse
     */
    public function store(Request $request, GalleryRepository $galleryRepository)
    {
        $validator = Validator::make($request->toArray(), ["name" => "required|max:191"]);

        if ($validator->fails()){
            return ;
        }

        $gallery = $galleryRepository->store($validator->validated(), Auth::id());

        return response()->json($gallery, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param $gallery_id
     * @param GalleryRepository $galleryRepository
     * @return JsonResponse
     */
    public function show($gallery_id, GalleryRepository $galleryRepository)
    {
            $gallery = $galleryRepository->show(Auth::id(), $gallery_id);

            return response()->json($gallery, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $gallery_id
     * @param GalleryRepository $galleryRepository
     * @return void
     */
    public function update(Request $request, $gallery_id, GalleryRepository $galleryRepository)
    {
        $validator = Validator::make($request->toArray(), ["name" => "required|max:191"]);


        if ($validator->fails()){
            return ;
        }

        $galleryRepository->update($validator->validated(), $gallery_id);

        return response()->json([],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
