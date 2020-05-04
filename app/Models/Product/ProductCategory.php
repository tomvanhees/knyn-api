<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = ["name","user_id"];


    public function products()
    {
        return $this->belongsToMany(Product::class,"product_category","category_id","product_id");
    }
}
