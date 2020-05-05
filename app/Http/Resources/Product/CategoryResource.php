<?php


namespace App\Http\Resources\Product;


use App\Http\Resources\AbstractResource;

class CategoryResource extends AbstractResource
{

    protected function process()
    {
        $this->collection["id"] = $this->data->id;
        $this->collection["name"] = $this->data->name;
    }
}