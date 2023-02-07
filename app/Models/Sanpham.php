<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{   protected $table='sanpham';
    protected $fillable=([
        'id',
        'san_pham',
    ]);
    use HasFactory;
    public function dactinh_sanpham()
   {
    return $this->belongsToMany(Dactinh::class,'dactinh_sanpham','san_pham','dac_tinh');
    // lưu ý: tên trường phải đặt trùng kiểu vacher và integer đều đc, riêng liên kết phải là dạng số
   }
}
