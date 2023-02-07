<?php

namespace App\Http\Controllers\Quanlybanhang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\quanlybanhang\Nhacc_banhang;
class Nhacc_banhang_Controller extends Controller
{
    public function nhacc_banhang()
     {
        $data=nhacc_banhang::get();
        dd($data);

     } 
}
