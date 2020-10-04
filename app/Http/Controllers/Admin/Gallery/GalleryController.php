<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Http\Resources\Gallery\GalleryCollection;
use Illuminate\Http\Request;
use App\Models\Gallery\Gallery;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Repositories\GalleryAPIRepository;
use Illuminate\Support\Facades\Validator;
use App\Traits\UsesResource;
use App\Http\Resources\Gallery\GalleryResource;
use App\Http\Resources\Media\MediaResource;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param GalleryAPIRepository $APIRepository
     * @return GalleryCollection
     */
    public function index(GalleryAPIRepository $APIRepository)
    {
        $galleries = $APIRepository->get();
        return new GalleryCollection($galleries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param GalleryRequest $request
     * @param GalleryAPIRepository $galleryRepository
     * @return GalleryResource
     */
    public function store(GalleryRequest $request, GalleryAPIRepository $galleryRepository)
    {
        $gallery = $galleryRepository->store($request->validated());
        return new GalleryResource($gallery);
    }

    /**
     * Display the specified resource.
     *
     * @param $gallery_id
     * @param GalleryAPIRepository $galleryAPIRepository
     * @return GalleryResource
     */
    public function show($gallery_id, GalleryAPIRepository $galleryAPIRepository)
    {
        $gallery = $galleryAPIRepository->find($gallery_id);
        return new GalleryResource($gallery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $gallery_id
     * @param GalleryAPIRepository $galleryRepository
     * @return JsonResponse
     */
    public function update(Request $request, $gallery_id, GalleryAPIRepository $galleryRepository)
    {
        $validated = $request->validate(["content.name" => "required|max:191"]);
        $galleryRepository->update($validated, $gallery_id);

        return response()->json(['message' => ''], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @param GalleryAPIRepository $galleryAPIRepository
     * @return JsonResponse
     */
    public function destroy($id, GalleryAPIRepository $galleryAPIRepository)
    {
        $galleryAPIRepository->delete($id);
        return response()->json([], 204);
    }
}
