<?php

namespace App\Models\Gallery;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\Facades\Auth;
use App\Traits\UsesAuthScope;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Image\Manipulations;
use Tenancy\Affects\Connections\Support\Traits\OnTenant;

class Gallery extends Model implements HasMedia
{
    use InteractsWithMedia, UsesAuthScope, OnTenant;

    protected $fillable = ["user_id", "name", "slug"];


    public function registerMediaConversions(Media $media = NULL): void
    {
        $this
            ->addMediaConversion('cover')
            ->fit(Manipulations::FIT_CROP, 200, 200)
            ->format(Manipulations::FORMAT_PNG)
            ->background('transparent');

        $this
            ->addMediaConversion('gallery')
            ->fit(Manipulations::FIT_FILL,200,200)
            ->format(Manipulations::FORMAT_PNG)
            ->background('transparent');;
    }
}
