<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesAuthScope;

class ProductBrand extends Model
{
    use UsesAuthScope;

    protected $fillable = ["name","user_id"];
}
