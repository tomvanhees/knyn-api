<?php


namespace App\Http\Resources\Media;


use App\Http\Resources\AbstractResource;

class MediaItemResource extends AbstractResource
{

    protected function process()
    {
        $this->collection["id"] = $this->data->id;
        $this->collection["name"] = $this->data->name;
        $this->collection["path"] = $this->data->getFullUrl();
        $this->collection['order'] = $this->data->order_column;
    }
}