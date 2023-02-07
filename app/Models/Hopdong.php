<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hopdong extends Model
{
    protected $table='hopdong';
    protected $filltable=[
        'id',
         'ma_nv',
        'ma_hd',
        'ma_cv',
        'ma_pb',
        'heso_luong',
        'ngayvao',
    ];
    use HasFactory;
}
