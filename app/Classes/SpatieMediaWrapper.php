<?php


namespace App\Classes;


use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Tenancy\Affects\Connections\Support\Traits\OnTenant;

class SpatieMediaWrapper extends Media
{
    use OnTenant;

}
