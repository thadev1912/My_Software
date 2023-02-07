<?php

namespace App\Models\quanlybanhang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table='invoice';
    protected $fillable=([
        'id',
        'invoice_number',
    ]);
}
