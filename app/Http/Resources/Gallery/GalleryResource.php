<?php


namespace App\Http\Resources\Gallery;

use App\Http\Resources\AbstractResource;
use Illuminate\Support\Facades\Log;

class GalleryResource extends AbstractResource
{

    protected function process()
    {
        $this->collection["id"]   = $this->data->id;
        $this->collection["name"] = $this->data->name;
        $this->collection['cover'] = $this->data->getFirstMediaUrl();
    }
}