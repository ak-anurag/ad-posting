<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAd extends Model
{
    use HasFactory;

    //connection with images
    public function images(){
        return $this->hasMany(Images::class, 'post_id');
    }

    //connection with user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
