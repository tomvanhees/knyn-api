<?php


namespace App\Repositories;


use App\Models\Gallery\Gallery;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

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
}