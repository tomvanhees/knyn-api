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
    protected function mapToResource($collection)
    {
        return $collection->map(function ($item) {
            return $this->toResource($item);
        });
    }

    /**
     * @param $resource
     * @return array
     */
    protected function toResource($resource): array
    {
        return ($this->getResource($resource))->toArray();
    }

    abstract protected function getResource($resource);
}
