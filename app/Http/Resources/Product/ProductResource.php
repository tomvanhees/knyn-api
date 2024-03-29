<?php


namespace App\Http\Resources\Product;


use App\Http\Resources\AbstractResource;
use App\Http\Resources\Media\MediaItemResource;
use App\Http\Resources\Media\ProductMediaResource;

class ProductResource extends AbstractResource
{

    protected function process()
    {
        $this->collection["id"]          = $this->data["id"];
        $this->collection["name"]        = $this->data["name"];
        $this->collection["slug"]        = $this->data["slug"];
        $this->collection["description"] = $this->data["description"];
        $this->collection["price"]       = $this->data["price"];
        $this->collection["brand"]       = $this->setBrand();
        $this->collection["categories"]  = $this->setCategories();
        $this->collection["media"]       = $this->setMedia();
        $this->collection["cover"]       = $this->setCover();
    }

    private function setBrand()
    {
        return (new BrandResource($this->data->brand))->toArray();
    }

    private function setCategories()
    {
        $categories = [];

        foreach ($this->data->categories as $category) {
            $categories[] = (new CategoryResource($category))->toArray();
        }

        return $categories;
    }

    private function setMedia()
    {
        $items = [];
        $media = $this->data->getMedia();

        foreach ($media as $item) {
            $items[] = (new ProductMediaResource($item))->toArray();
        }
        return $items;
    }

    private function setCover()
    {
        return $this->data->getFirstMediaUrl("default", "cover");
    }
}