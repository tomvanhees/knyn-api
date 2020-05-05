<?php

namespace App\Models\Gallery;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\Facades\Auth;
use App\Traits\UsesAuthScope;

class Gallery extends Model implements HasMedia
{
    use InteractsWithMedia, UsesAuthScope;

    protected $fillable = ["user_id","name","slug"];



}
