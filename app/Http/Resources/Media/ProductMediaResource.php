<?php


namespace App\Http\Resources\Media;


use App\Http\Resources\AbstractResource;

class ProductMediaResource extends MediaItemResource
{
    function getPath(): string
    {
        if ($this->data->hasGeneratedConversion("gallery")) {
            return $this->data->getFullUrl("gallery");
        }
        return $this->data->getFullUrl();
    }
}
