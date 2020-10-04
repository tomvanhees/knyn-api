<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesAuthScope;
use Tenancy\Affects\Connections\Support\Traits\OnTenant;

class ProductCategory extends Model
{
    use UsesAuthScope, OnTenant;

    protected $fillable = ["name"];


    public function products()
    {
        return $this->belongsToMany(Product::class,"product_category","category_id","product_id");
    }
}
