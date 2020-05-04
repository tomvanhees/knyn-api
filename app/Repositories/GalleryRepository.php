<?php


namespace App\Repositories;


use App\Models\Gallery\Gallery;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use App\Http\Resources\Gallery\GalleryResource;
use App\Http\Resources\Media\MediaResource;
use Illuminate\Support\Facades\Log;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class GalleryRepository
{
    public function get(int $user_id)
    {

        $galleries = Gallery::where("user_id",$user_id)->get();

        $galleriesResource = $galleries->map(function ($item,$key) {
            return (new GalleryResource($item))->toArray();
        });

        $galleriesResource = $galleriesResource->all();

        return ["galleries" => $galleriesResource];
    }

    public function store(array $data,int $user_id)
    {

        $gallery = [
            "user_id" => $user_id,
            "name"    => $data["name"],
            "slug"    => Str::slug($data["name"])
        ];

        return Gallery::create($gallery);
    }

    public function show($user_id,$gallery_id)
    {
        $gallery    = Gallery::where([["user_id",$user_id],["id",$gallery_id]])->first();
        $mediaItems = $gallery->getMedia();

        $galleryResource = (new GalleryResource($gallery))->toArray();
        $mediaResource   = (new MediaResource($mediaItems))->toArray();

        return [
            "gallery" => $galleryResource,
            "media"   => $mediaResource
        ];
    }

    public function update(array $data,$gallery_id)
    {
        $gallery = [
            "name" => $data["name"],
            "slug" => Str::slug($data["name"])
        ];

        Gallery::find($gallery_id)->update($gallery);

        return;
    }

    public function addMediaFiles(array $files, $gallery_id)
    {
        $gallery = Gallery::find($gallery_id);

        foreach ($files as $file) {
            $gallery->addMedia($file)->toMediaCollection();
        }

        $mediaResource = (new MediaResource($gallery->getMedia()))->toArray();

        return [
            "media" => $mediaResource
        ];
    }

    public function deleteMedia($id)
    {
        Media::find($id)->delete();

        return;
    }


}