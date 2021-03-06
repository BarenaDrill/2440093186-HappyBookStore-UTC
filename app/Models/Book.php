<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function details(){
        return $this->hasOne(Detail::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
