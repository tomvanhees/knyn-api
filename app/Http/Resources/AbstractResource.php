<?php


namespace App\Http\Resources;


use Illuminate\Support\Collection;

abstract class AbstractResource
{

    protected $data;

    /**
     * @var Collection
     */
    protected $collection;

    public function __construct(Object $data){
        $this->data = $data;
        $this->collection = new Collection();
    }

    protected abstract function process();

    public function toArray()
    {
        $this->process();
        return $this->collection->toArray();
    }
}