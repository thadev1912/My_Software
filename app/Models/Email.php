<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table='email';
    protected $filltable=
    [
        'id',
        'ma_email',
        'email',
    ];
    use HasFactory;

}
