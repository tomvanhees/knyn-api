<?php


namespace App\Http\Resources\Product;


use App\Http\Resources\AbstractResource;

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
        $this->collection["images"]      = $this->setImages();
        $this->collection["cover"]       = $this->setCover();
    }

    private function setBrand()
    {
        return [
            "id"   => $this->data->brand->id,
            "name" => $this->data->brand->name
        ];
    }

    private function setCategories()
    {
        $categories = [];

        foreach ($this->data->categories as $category) {
            $categories[] = [
                "id"   => $category->id,
                "name" => $category->name
            ];
        }

        return $categories;
    }

    private function setImages()
    {
        $items = [];
        $media = $this->data->getMedia();

        foreach ($media as $item) {
            $items[] = $item->getFullUrl();
        }
        return $items;
    }

    private function setCover()
    {
        return $this->data->getFirstMediaUrl();
    }
}