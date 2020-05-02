<?php

namespace App\Models\Gallery\Media;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Image extends Model implements HasMedia
{
    use InteractsWithMedia;
}
