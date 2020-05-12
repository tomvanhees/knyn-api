<?php


namespace App\Http\Resources\Gallery;

use App\Http\Resources\AbstractResource;
use App\Http\Resources\Media\GalleryMediaResource;
use Illuminate\Database\Eloquent\Collection;

class GalleryResource extends AbstractResource
{
    /**
     * @var Collection
     */
    private Collection $media;

    protected function process()
    {
        $this->setMedia();

        $this->collection["id"]    = $this->data->id;
        $this->collection["name"]  = $this->data->name;
        $this->collection["slug"]  = $this->data->slug;
        $this->collection['cover'] = $this->getCover();;
        $this->collection['media'] = $this->getMediaItems();
    }

    private function getCover()
    {
        if (count($this->media) === 0) {

            /**
             * TODO
             * Adding placeholder URL
             */
            return "";
        }

        if ($this->media[0]->hasGeneratedConversion("cover")) {
            return $this->data->getFirstMediaUrl("default","cover");
        }

        return $this->data->getFirstMediaUrl();


    }

    private function setMedia()
    {
        $this->media = $this->data->getMedia();
    }


    private function getMediaItems()
    {
        $mediaItems = [];

        foreach ($this->media as $mediaItem) {
            $mediaItems[] = (new GalleryMediaResource($mediaItem))->toArray();
        }

        return $mediaItems;
    }
}