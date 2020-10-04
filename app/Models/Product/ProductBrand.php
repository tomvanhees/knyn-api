<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesAuthScope;
use Tenancy\Affects\Connections\Support\Traits\OnTenant;

class ProductBrand extends Model
{
    use UsesAuthScope, OnTenant;

    protected $fillable = ["name"];
}
