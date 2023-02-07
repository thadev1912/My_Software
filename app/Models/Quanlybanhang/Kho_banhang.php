<?php

namespace App\Models\quanlybanhang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kho_banhang extends Model
{
    use HasFactory;
    protected $table='Kho_banhang';
    protected $fillable =[
        'id',
        'ma_kho',
        'ten_kho',
        'dia_chi',
        'so_dien_thoai',
        'ghi_chu',

    ];
}
