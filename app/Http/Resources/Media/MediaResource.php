<?php


namespace App\Http\Resources\Media;


use App\Http\Resources\AbstractResource;

class MediaResource extends AbstractResource
{

    protected function process()
    {
        foreach ($this->data as $item) {
            $this->collection->push((new MediaItemResource($item))->toArray());
        }
    }
}