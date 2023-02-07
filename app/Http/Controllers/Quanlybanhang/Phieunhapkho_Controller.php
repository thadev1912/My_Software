<?php

namespace App\Http\Controllers\Quanlybanhang;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Invoice_Controller;
use Illuminate\Http\Request;
use App\Models\quanlybanhang\Phieunhapkho;
use App\Models\Quanlybanhang\Vattu_banhang;
use App\Models\quanlybanhang\Invoice;
use App\Models\quanlybanhang\Chitietnhapkho_banhang;

class Phieunhapkho_Controller extends Controller
{
    public function phieunhapkho()
    {
    $data= phieunhapkho::get();
    //dd($data);
    }
   
    public function them_phieunhapkho(Request $res)
    {
         //dd($res->all());
         
         phieunhapkho::create([
            'ma_phieu'=>$res->txt_maphieu,
            'ngaynhap'=> $res->txt_ngaynhap,
            'id_nhacc'=>$res->txt_nhacc,
            'id_nhanvien'=>$res->txt_nhanvien,
            'id_kho'=>$res->txt_kho,
            'diachi'=>$res->txt_diachi,
         ]);
                    invoice::insert([
                       'invoice_number'=>$res->txt_maphieu,
                  ]);  
         return redirect()->route('nhapkho')->with('thongbao','Đã thêm thành công');
    }
    public function ajax_dsvattu($id)
    {
        $data=Chitietnhapkho_banhang::where('id_phieunhap',$id)->get();
        //dd($data);
        if($data)
          {
            return response()->json([
                'data'=>$data,
                'status'=>200,
                'messege'=>'Lấy dữ liệu thành công'
            ]);
          }
          else{
            return response()->json([
                'data'=>null,
                'status'=>404,
                'messege'=>'Kết nối lỗi'
            ]);
          }
              }
              public function luu_vattu(Request $request)
              {
            //     invoice::insert([
            //        'invoice_number'=>$request->txt_maphieu,
            // ]);        

                $data=Chitietnhapkho_banhang::create([
                    'id_phieunhap'=> $request->ma_phieu,     
                    'id_vattu'=> $request->ma_vattu,                   
                    'sl_vattu'=> $request->soluong,
                    'id_kho'=> 'KH01',
                  
                  ]);
                  if($data)
                  {
                    return response()->json([
                    'data'=>$data,
                    'status'=>true,
                    'messege'=>'Thêm dữ liệu thành công rồi cha nội_ vãi!!!',      
                    ]);
                  }
                  else
                  {
                    return response()->json([
                      'status' => false,
                      'msg' =>'Vui lòng kiểm tra lại',        
                      ]);
                  }
              }
              public function xoa_vattu($id)
              {
                   $data=Chitietnhapkho_banhang::where('id_phieunhap',$id)->delete();
                   if($data)
                   {
                     return response()->json([
                     'data'=>$data,
                     'status'=>true,
                     'messege'=>'Đã xóa dữ liệu thành công!!!',      
                     ]);
                   }
                   else
                   {
                     return response()->json([
                       'status' => false,
                       'msg' =>'Vui lòng kiểm tra lại',        
                       ]);
                   }
              }

}
