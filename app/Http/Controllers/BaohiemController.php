<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baohiem;
use DB;
class BaohiemController extends Controller
{
    public function baohiem()
     {
        $baohiem=DB::table('baohiem')->paginate(5);
        return view('baohiem.baohiem',compact('baohiem'));
     }
     public function them_bhxh()
      {
        return view('baohiem.them_bhxh');
      }
      public function luu_bhxh(Request $request)
       {
        $request->validate([
          
            'txt_ma_bhxh'=>'required',
            'txt_ma_nv'   =>'required',
            'txt_loai_bhxh'=>'required',
            'txt_ngaycap'  =>'required',
            'txt_ngayhethan'=>'required',
            'txt_noicap'=>'required',
          ],
          [
            'txt_ma_bhxh.required' =>'Mã bảo hiểm xã hội không được để trống',
            'txt_ma_nv.required' =>'Mã nhân viên không được để trống',
            'txt_loai_bhxh.required' =>'Mã nhân viên không được để trống',
            'txt_ngaycap.required' =>'Ngày cấp không được để trống',
            'txt_ngayhethan.required' =>'Ngày hết hạn không được để trống',
            'txt_noicap.required' =>'Nơi cấp không được để trống',
            
          ]
          ); 

        DB::table('baohiem')->insert([
              'ma_bhxh'=>$request->txt_ma_bhxh,
              'ma_nv'=>$request->txt_ma_nv,
              'loai_bhxh'=>$request->txt_loai_bhxh,
              'ngaycap'=>$request->txt_ngaycap,
              'ngayhethan'=>$request->txt_ngayhethan,
              'noicap'=>$request->txt_noicap,
         
        ]);
        return redirect()->route('baohiem')->with('thongbao','Đã lưu thông tin thành công!!!');
       }
       public function sua_bhxh($id)
         {
            $data=DB::table('baohiem')->where('id',$id)->first();
            return view('baohiem.sua_bhxh',compact('data'));
            
            
         }
         public function capnhat_bhxh($id,Request $request)
         {
                DB::table('baohiem')->where('id',$id)->update([
                    'ma_bhxh'=>$request->txt_ma_bhxh,
                    'ma_nv'=>$request->txt_ma_nv,
                    'loai_bhxh'=>$request->txt_loai_bhxh,
                    'ngaycap'=>$request->txt_ngaycap,
                    'ngayhethan'=>$request->txt_ngayhethan,
                    'noicap'=>$request->txt_noicap,

                ]);
              return redirect()->route('baohiem')->with('thongbao','Đã cập nhật thông tin thành công!!!');
         }
         public function xoa_bhxh($id)
            {
                DB::table('baohiem')->where('id',$id)->delete();
                return redirect()->route('baohiem')->with('thongbao','Đã xóa thông tin thành công!!!');
            }
            public function chitiet_bhxh($ma_nv)
             {
              $data=DB::table('baohiem')
              ->join('nhanvien','baohiem.ma_nv','=','nhanvien.ma_nv')
              ->where('baohiem.ma_nv',$ma_nv)->first();
              return view('baohiem.chitiet_bhxh',compact('data'));
             }
             
}
