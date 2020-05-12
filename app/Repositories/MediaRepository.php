<?php


namespace App\Repositories;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaRepository
{
    public function destroy($id){
        Media::find($id)->delete();
    }
}