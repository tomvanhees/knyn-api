<?php

namespace App\Http\Resources\Gallery;

use Illuminate\Http\Resources\Json\ResourceCollection;

class GalleryCollection extends ResourceCollection
{

    public static $wrap = 'content';
    public $collects = GalleryResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'collection' => $this->collection
        ];
    }
}
