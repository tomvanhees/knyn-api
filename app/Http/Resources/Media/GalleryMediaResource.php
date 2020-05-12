<?php


namespace App\Http\Resources\Media;


use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class GalleryMediaResource extends MediaItemResource
{
    public function getPath()
    : string
    {
        if ($this->data->hasGeneratedConversion("gallery")) {
           return $this->data->getFullUrl("gallery");
        }
        return $this->data->getFullUrl();
    }
}