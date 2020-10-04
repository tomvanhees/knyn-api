<?php

namespace App\Http\Resources\Product;

use App\Traits\HasCover;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    use HasCover;

    public static $wrap = 'content';

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "slug" => $this->slug,
            "description" => $this->description,
            "price" => $this->price,
            "brand" => new BrandResource($this->brand),
            "categories" => CategoryResource::collection($this->categories),
            "media" => [],
            "cover" => $this->getCover(),
        ];
    }
}
