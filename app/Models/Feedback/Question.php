<?php

namespace App\Models\Feedback;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesAuthScope;

class Question extends Model
{
    use UsesAuthScope;

    protected $fillable = ["user_id","question","answers"];

    protected $casts = [
        "answers" => "array"
    ];
}
