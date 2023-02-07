<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_Permission extends Model
{
    protected $table="permission_role";
    protected $fillable=([
        
        'role_name',
        'permissions',
    ]);
    use HasFactory;
}
