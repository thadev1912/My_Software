<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chitiet extends Model
{   protected $table='chitiet';
    protected $filltable=([
        'id',
        'chi_tiet',
    ]);
    use HasFactory;
}
