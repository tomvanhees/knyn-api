<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Traits\UsesAuthScope;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Image\Manipulations;
use Tenancy\Affects\Connections\Support\Traits\OnTenant;

class Product extends Model implements HasMedia
{
    use InteractsWithMedia,OnTenant;


    public function registerMediaConversions(Media $media = NULL)
    : void
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

    public function brand()
    {
        return $this->belongsTo(ProductBrand::class)->withDefault([
                                                                      "id"   => 0,
                                                                      "name" => "Merkloos"
                                                                  ]);
    }

    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class,"product_category","product_id","category_id");
    }
}
