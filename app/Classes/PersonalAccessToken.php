<?php


namespace App\Classes;


use Tenancy\Affects\Connections\Support\Traits\OnTenant;

class PersonalAccessToken extends \Laravel\Sanctum\PersonalAccessToken
{
    use OnTenant;

    protected static function boot()
    {
        parent::boot();
    }
}
