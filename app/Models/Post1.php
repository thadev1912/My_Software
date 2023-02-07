<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='post';
    protected $filltable=
    [
        'id',
        'user_id',
        'title',
        'content',
        'status',
    ];
    use HasFactory;
    public function nguoidang()
     {
        return $this->belongsTo(User::class);
     }

}
