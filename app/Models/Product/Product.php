<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use InteractsWithMedia;


    protected $fillable = ["user_id","name","slug","description","brand_id","price"];


    public function brand()
    {
        return $this->belongsTo(ProductBrand::class);
    }

    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class,"product_category","product_id","category_id");
    }
}
