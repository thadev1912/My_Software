<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donhang extends Model
{
    protected $table='donhang';
    protected $filltable=
    [
        'id',
        'ma_kh',
        'ten_sp',
        'dongia_sp',
        'soluong_sp',
        'tonggia_sp',
        'total_sp',

    ];
    use HasFactory;
}
