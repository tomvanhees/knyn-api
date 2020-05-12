<?php


namespace App\Http\Resources\Media;

use App\Http\Resources\AbstractResource;

abstract class MediaItemResource extends AbstractResource
{

    protected function process()
    {
        $this->collection["id"] = $this->data->id;
        $this->collection["name"] = $this->data->name;
        $this->collection["path"] = $this->getPath();
        $this->collection['order'] = $this->data->order_column;
    }

    /**
     * returns the path of the mediaItem
     * @return string
     */
    abstract function getPath():string ;
}