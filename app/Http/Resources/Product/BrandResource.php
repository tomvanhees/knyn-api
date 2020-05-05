<?php


namespace App\Http\Resources\Product;


use App\Http\Resources\AbstractResource;

class BrandResource extends AbstractResource
{
    protected function process()
    {
        $this->collection["id"] = $this->data->id;
        $this->collection["name"] = $this->data->name;
    }
}