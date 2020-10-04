<?php


namespace App\Repositories;
use App\Classes\SpatieMediaWrapper;

class MediaRepository
{
    public function destroy($id){
        SpatieMediaWrapper::find($id)->delete();
    }
}
