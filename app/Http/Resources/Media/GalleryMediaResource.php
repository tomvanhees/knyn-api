<?php

namespace App\Http\Resources\Media;

use Illuminate\Http\Resources\Json\JsonResource;

class GalleryMediaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "path" => $this->getPath(),
            'order' => $this->order_column,
        ];
    }


    private function getPath(): string
    {
        if ($this->hasGeneratedConversion("gallery")) {
            return $this->getFullUrl("gallery");
        }
        return $this->getFullUrl();
    }
}
