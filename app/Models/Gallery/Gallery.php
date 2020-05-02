<?php

namespace App\Models\Gallery;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Gallery extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ["user_id","name","slug"];

}
