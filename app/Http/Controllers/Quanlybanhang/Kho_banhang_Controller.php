<?php

namespace App\Http\Controllers\Quanlybanhang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\quanlybanhang\Kho_banhang;
class Kho_banhang_Controller extends Controller
{
    public function kho_banhang()
     {
        $data=kho_banhang::get();
        dd($data);

     } 
}
