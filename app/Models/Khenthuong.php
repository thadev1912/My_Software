<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khenthuong extends Model
{
    use HasFactory;
    protected $table='khenthuong';
    protected $filltable=([
           'id',
           'ma_nv',
           'sotien',
           'ngay_khenthuong',
           'lydo',


    ]);
}
