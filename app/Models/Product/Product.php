<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Traits\UsesAuthScope;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Image\Manipulations;
use Tenancy\Affects\Connections\Support\Traits\OnTenant;

class Product extends Model
{
    use InteractsWithMedia,OnTenant;


    protected $fillable = ["user_id","name","slug","description","brand_id","price"];



    public function registerMediaConversions(Media $media = NULL)
    : void
    {
        $this
            ->addMediaConversion('cover')
            ->fit(Manipulations::FIT_CROP,250,250);

        $this
            ->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_CROP,50,50);

        $this
            ->addMediaConversion('display')
            ->fit(Manipulations::FIT_FILL,500,500);


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
