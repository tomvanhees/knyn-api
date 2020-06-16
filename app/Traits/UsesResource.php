<?php


namespace App\Traits;


use App\Http\Resources\Statistics\StatisticResource;

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


    protected function toResource($resource)
    {
        return ($this->getResource($resource))->toArray();
    }

    abstract protected function getResource($resource);
}