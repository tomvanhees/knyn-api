<?php

namespace App\Models\Feedback;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesAuthScope;

class Answer extends Model
{
    use UsesAuthScope;


    protected $fillable = ["user_id","answer"];

    protected $casts = [
        "answer" => "array"
    ];
}
