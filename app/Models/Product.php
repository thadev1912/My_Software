<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   
    protected $table='product';
    protected $filltable=
    [
        'id',
        'name',
        'price',
        'image',

    ];
    use HasFactory;
}
