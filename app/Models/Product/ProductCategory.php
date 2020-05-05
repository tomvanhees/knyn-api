<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesAuthScope;

class ProductCategory extends Model
{
    use UsesAuthScope;

    protected $fillable = ["name","user_id"];


    public function products()
    {
        return $this->belongsToMany(Product::class,"product_category","category_id","product_id");
    }
}
