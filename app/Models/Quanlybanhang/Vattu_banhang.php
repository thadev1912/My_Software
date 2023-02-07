<?php

namespace App\Models\Quanlybanhang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vattu_banhang extends Model
{
    use HasFactory;
    protected $table='Vattu_banhang';
    protected $fillable =[
        'id',
        'ma_vattu',
        'ten_vattu',
        'dvt_vattu',
        'soluong',
       

    ];
}
