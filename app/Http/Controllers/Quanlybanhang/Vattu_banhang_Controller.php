<?php

namespace App\Http\Controllers\Quanlybanhang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\quanlybanhang\Vattu_banhang;
class Vattu_banhang_Controller extends Controller
{
    public function vattu_banhang()
     {
        $data=vattu_banhang::get();
        dd($data);

     } 
}
