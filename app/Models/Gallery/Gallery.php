<?php

namespace App\Models\Gallery;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ["user_id","name","slug"];

}
