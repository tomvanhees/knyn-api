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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->toArray(), ["name" => "required|max:191"]);

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
