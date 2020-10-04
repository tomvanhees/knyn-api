<?php

namespace App\Models\Feedback;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesAuthScope;
use Tenancy\Affects\Connections\Support\Traits\OnTenant;

class Question extends Model
{
    use UsesAuthScope, OnTenant;

    protected $fillable = ["question", "is_active"];

    protected $casts = [
        "is_active" => "bool"
    ];

    public function answers(){
        return $this->hasMany(Answer::class);
    }

}
