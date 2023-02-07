<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dulieuchamcong extends Model
{
    
    protected $table='dulieuchamcong';
    protected $fillable=
    [
        'id',
        'ma_nv',
        'ma_cv',
        'ma_pb',
        'ngay_chamcong',
        'gio_vao',
        'gio_ra',
    ];
    use HasFactory;
}
