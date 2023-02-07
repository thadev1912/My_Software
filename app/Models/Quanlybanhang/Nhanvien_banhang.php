<?php

namespace App\Models\Quanlybanhang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhanvien_banhang extends Model
{
    use HasFactory;
    protected $table='Nhanvien_banhang';
    protected $fillable =[
        'id',
        'ma_nhanvien',
        'ten_nhanvien',
        'tinhtrang',
    ];
}
