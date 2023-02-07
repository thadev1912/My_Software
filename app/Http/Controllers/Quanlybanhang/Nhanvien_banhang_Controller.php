<?php

namespace App\Http\Controllers\Quanlybanhang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\quanlybanhang\Nhanvien_banhang;
class Nhanvien_banhang_Controller extends Controller
{
    public function nhanvien_banhang()
    {
       $data=nhanvien_banhang::get();
       dd($data);

    } 
}
