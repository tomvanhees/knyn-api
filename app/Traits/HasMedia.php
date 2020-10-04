<?php


namespace App\Traits;

trait HasMedia
{
    public function setMedia(): void
    {
        $this->media = $this->data->getMedia();
    }


    public function getMediaItems(): array
    {
        $mediaItems = [];
        $resource = $this->getMediaResource();

        foreach ($this->media as $mediaItem) {
            $mediaItems[] = (new $resource($mediaItem))->toArray();
        }

        return $mediaItems;
    }
}
