<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dactinh_sanpham extends Model
{  
    protected $table='dactinh_sanpham';
    protected $fillable=([
        'id_sanpham',
        'id_dactinh',
    ]);
    use HasFactory;
}
