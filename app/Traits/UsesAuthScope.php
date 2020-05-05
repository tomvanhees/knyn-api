<?php


namespace App\Traits;


use Illuminate\Support\Facades\Auth;

trait UsesAuthScope
{
    public function scopeFromAuth($query)
    {
        return $query->where("user_id",Auth::id());
    }
}