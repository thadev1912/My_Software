<?php

namespace App\Models\Quanlybanhang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chitietnhapkho_banhang extends Model
{
    use HasFactory;
    protected $table='Chitietnhapkho_banhang';
    protected $fillable =[
        'id',
        'id_phieunhap',
        'id_vattu',
        'sl_vattu',
        'id_kho',
     

    ];
}
