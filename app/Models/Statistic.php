<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesAuthScope;
use App\Models\Feedback\Question;

class Statistic extends Model
{
    use UsesAuthScope;

    protected $fillable = [
        "user_id","question_id","static"
    ];

    protected $casts = [
        "statistic" => "array"
    ];


    public function question(){
        return $this->belongsTo(Question::class);
    }

}
