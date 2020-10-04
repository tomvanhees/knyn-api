<?php

namespace App\Http\Resources\Gallery;

use App\Http\Resources\Media\GalleryMediaResource;
use App\Traits\HasCover;
use Illuminate\Http\Resources\Json\JsonResource;

class GalleryResource extends JsonResource
{
    use HasCover;

    public static $wrap = 'content';

    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "slug" => $this->slug,
            'cover' => $this->getCover(),
            'media' => GalleryMediaResource::collection($this->media)
        ];
    }

}
