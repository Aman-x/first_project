<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function user(){
        return $this->belongsTo(user::class);
    }

    public function tags(){
        return $this->belongsToMany(tag::class,'post_tag');
    }
}
