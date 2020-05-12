<?php


namespace App\Http\Resources\Media;


use App\Http\Resources\AbstractResource;

class ProductMediaResource extends AbstractResource
{

    protected function process()
    {
        $this->collection["id"]      = $this->data->id;
        $this->collection["name"]    = $this->data->name;
        $this->collection["thumb"]   = $this->getThumb();
        $this->collection['display'] = $this->getDisplay();
        $this->collection['order']   = $this->data->order_column;
    }

    public function getThumb()
    : string
    {
        return $this->data->getFullUrl("thumb");
    }

    public function getDisplay()
    : string
    {
        return $this->data->getFullUrl("display");
    }

}