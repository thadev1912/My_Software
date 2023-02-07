<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nhanvien;
use DB;
use PDF;
class PDFController extends Controller
{
    //Trường hợp 1: nếu muốn chuyển thẳng ra giao diện PDF rồi download trên trình duyệt sau:
public function basic_view(Request $request)
   {
        $items= DB::table('nhanvien')->get();
         view()->share('items',$items);
       
          $pdf = PDF::loadView('pdf.basic_view');
        
          return $pdf->stream();
     }
   //  Trường hợp 1 nào muốn hiện thị dạng html trước rồi click button download trên html để tải về
     public function pdfview2(Request $request)
    {
         $items= DB::table('nhanvien')->get();
          view()->share('items',$items);
          if($request->has('download')) 
          {
           $pdf= PDF::loadView('pdf.basic_view');
           return $pdf->download('basic_view.pdf');  // tạo ra file tên này khi download về
          }
          return view('pdf.basic_view');
    }
    public function sample_view(Request $request)
      {
        
       
          $pdf = PDF::loadView('pdf.sample_view');
        
          return $pdf->stream();
     }
}
