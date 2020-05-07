<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesAuthScope;

class Information extends Model
{
    use UsesAuthScope;

    protected $table = "informations";

    protected $fillable = ["user_id","hours","social_media"];

    protected $casts = [
        "hours"        => "array",
        "social_media" => "array"
    ];


    public function qr_codes(){
        return $this->hasManyThrough(QrCode::class, User::class,"id","user_id","user_id","id");
    }


    public function app_token(){
        return $this->qr_codes()->where("qr_codes.name", "=","app");
    }
}
