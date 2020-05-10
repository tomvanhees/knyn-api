<?php

namespace App\Models\Gallery;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\Facades\Auth;
use App\Traits\UsesAuthScope;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Image\Manipulations;

class Gallery extends Model implements HasMedia
{
    use InteractsWithMedia,UsesAuthScope;

    protected $fillable = ["user_id","name","slug"];


    public function registerMediaConversions(Media $media = NULL)
    : void
    {
        $this
            ->addMediaConversion('cover')
            ->fit(Manipulations::FIT_CROP,250,250);


        $this
            ->addMediaConversion("gallery")
            ->width(250);
    }
}
