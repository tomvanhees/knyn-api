<?php


namespace App\Http\Resources\Media;


use App\Http\Resources\AbstractResource;
use Illuminate\Support\Facades\Log;

class MediaItemResource extends AbstractResource
{

    protected function process()
    {
        $this->collection["id"] = $this->data->id;
        $this->collection["name"] = $this->data->name;
        $this->collection["path"] = $this->getPath();
        $this->collection['order'] = $this->data->order_column;
    }



    private function getPath(){
        return $this->data->getFullUrl("gallery");
    }
}