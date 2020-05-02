<?php


namespace App\Repositories;


use App\Models\Gallery\Gallery;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\FileBag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\UploadedFile;

class GalleryRepository
{
    public function get(int $user_id)
    : Collection
    {
        return Gallery::where("user_id",$user_id)->get();
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

        return [
            "gallery" => $gallery,
            "media"   => $mediaItems
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


    public function addMediaFiles(array $files,$gallery_id,$user_id)
    {
        $gallery = Gallery::find($gallery_id);

        foreach ($files as $file) {
            $gallery->addMedia($file)->toMediaCollection();
        }

        $media = $gallery->getMedia();

        Log::debug("reposigit tory");
        Log::debug($media);
        return $media;
    }
}