<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phepnam;
use App\Models\Nhanvien;
use DB;
use Carbon\Carbon;
use DateTime;
class PhepnamController extends Controller
{
    public function phepnam(Request $request) 
    {
        $phepnam= DB::table('phepnam')
        ->join('nhanvien','phepnam.ma_nv','=','nhanvien.ma_nv')
        ->select('phepnam.*','nhanvien.hoten_nv')
        ->paginate(5);
         
        return view('phepnam.phepnam',compact('phepnam'));
    }
    public function them_pn()
    {
     
      return view('phepnam.them_pn');
    }

    public function ajax(Request $request)
     {
       $info=$request->get('ajax'); 
       $layds=DB::table('nhanvien')->where('ma_nv',$info)->first();
        //dd($layds);
        return json_encode($layds);
    
     }
      public function luu_pn(Request $request)
       {
            DB::table('phepnam')->insert([
             'ma_nv'=>$request->txt_ma_nv,            
             'ngay_batdau'=>$request->txt_ngay_batdau,
             'phepnam_dadung'=>'0',
             'ngay_ketthuc'=>$request->txt_ngay_ketthuc,

            ]);
            return redirect()->route('phepnam')->with('thongbao','Đã lưu thông tin thành công!!!');
       }
       public function sua_pn($id)
          {
           $data= DB::table('phepnam')->where('id',$id)->first();
            return view('phepnam.sua_pn',compact('data'));
          } 
          public function capnhat_pn($id,Request $request)
          {
               DB::table('phepnam')-> where('id',$id)->update([
                'ma_nv'=>$request->txt_ma_nv,            
                'ngay_batdau'=>$request->txt_ngay_batdau,
                'phepnam_dadung'=>$request->txt_phepnam_dadung,
                'ngay_ketthuc'=>$request->txt_ngay_ketthuc,
   
               ]);
               return redirect()->route('phepnam')->with('thongbao','Đã cập nhật thông tin thành công!!!');
          }
          public function xoa_pn($id)
            {
                DB::table('phepnam')->where('id',$id)->delete();
                return redirect()->route('phepnam')->with('thongbao','Đã xóa thông tin thành công!!!');  
            }
    }
        
       
       
     



















