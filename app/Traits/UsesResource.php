<?php


namespace App\Traits;


trait UsesResource
{
    /**
     * Maps collection into the resource
     * @param $collection
     * @return mixed
     */
    protected function map($collection)
    {
        return $collection->map(function ($item) {
            return $this->toResource($item);
        });
    }

    abstract protected function toResource($resource);
}