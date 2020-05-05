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

    public function store(array $data,int $user_id)
    {

        $gallery = [
            "user_id" => $user_id,
            "name"    => $data["name"],
            "slug"    => Str::slug($data["name"])
        ];

        return Gallery::create($gallery);
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




}