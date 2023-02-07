<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dactinh extends Model
{ 
    protected $table='dactinh';
    protected $fillable=([
        'id',
        'dac_tinh',
    ]);
    use HasFactory;
    public function chitiet_dactinh()
     {
       return $this->belongstoMany(Chitiet::class,'dactinh_chitiet','dac_tinh','chi_tiet');
       
     }
   
}
