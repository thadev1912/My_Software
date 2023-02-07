<?php

namespace App\Http\Controllers\Quanlybanhang;

use App\Http\Controllers\Controller;
use App\Models\quanlybanhang\Kho_banhang;
use App\Models\quanlybanhang\Nhanvien_banhang;
use App\Models\quanlybanhang\Nhacc_banhang;
use App\Models\Quanlybanhang\Vattu_banhang;
use App\Models\quanlybanhang\Invoice;
use Illuminate\Http\Request;
use Carbon\Carbon;
class Nhapkho_Controller extends Controller
{
    public function nhapkho()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $kho=Kho_banhang::get();
        $nhanvien=Nhanvien_banhang::get();
        $nhacc=Nhacc_banhang::get();
        $vattu=Vattu_banhang::get();
        $latest = invoice::latest()->first();

        if (! $latest) {
                          $invoice_number='PNK0001';          
                      }    
        $string = preg_replace("/[^0-9\.]/", '', $latest->invoice_number);    
        $invoice_number= 'PNK' . sprintf('%04d', $string+1);         
        return view('Quanlybanhang.nhapkho',compact('kho','nhanvien','nhacc','vattu','invoice_number'));
    }
   
}
