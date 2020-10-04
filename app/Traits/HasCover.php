<?php


namespace App\Traits;

trait HasCover
{
    protected function getCover()
    {
        if (count($this->media) === 0) {
            /** TODO Create Placeholder Image*/
            return 'https://lorempixel.com/200/200/';
        }

        if ($this->media[0]->hasGeneratedConversion("cover")) {
            return $this->getFirstMediaUrl("default", "cover");
        }

        return $this->getFirstMediaUrl();
    }
}
