<?php


namespace App\Http\Resources\Gallery;

use App\Http\Resources\AbstractResource;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\Media\MediaItemResource;

class GalleryResource extends AbstractResource
{

    protected function process()
    {
        $this->collection["id"]    = $this->data->id;
        $this->collection["name"]  = $this->data->name;
        $this->collection["slug"]  = $this->data->slug;
        $this->collection['cover'] = $this->getCover();;
        $this->collection['media'] = $this->getMedia();
    }

    private function getCover()
    {
        $url =$this->data->getFirstMediaUrl("default","cover");
        Log::debug($url);

        if ($url === ""){
            $url = "https://picsum.photos/250/250";
        }
        return  $url ;
    }

    private function getMedia()
    {
        $mediaItems = [];
        $media      = $this->data->getMedia();

        foreach ($media as $mediaItem) {
            $mediaItems[] = (new MediaItemResource($mediaItem))->toArray();
        }

        return $mediaItems;
    }
}