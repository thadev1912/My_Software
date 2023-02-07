<?php

namespace App\Models\Quanlybanhang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Phieunhapkho extends Model
{
    use HasFactory;
    protected $table='phieunhapkho_banhang';
    protected $fillable =[
        'id',
        'ma_phieu',
        'id_nhanvien',       
        'id_kho',
        'id_nhacc',
        'ngaynhap',
        'ghichu',
    ];
   
}
