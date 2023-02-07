<?php

namespace App\Models\Quanlybanhang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhacc_banhang extends Model
{
    use HasFactory;
    protected $table='Nhacc_banhang';
    protected $fillable =[
        'id',
        'ma_ncc',
        'ten_ncc',
        'diachi_ncc',
       
    ];
}
