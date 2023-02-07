<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kyluat;
use DB;
class KyluatController extends Controller
{
     public function kyluat()
       {
       $kyluat=DB::table('kyluat')
       ->join('nhanvien','kyluat.ma_nv','=','nhanvien.ma_nv')
       ->paginate(5);
       return view('kyluat.kyluat',compact('kyluat'));
          
       }
       public function them_kl()
       {

        return view('kyluat.them_kl');
       }
       public function luu_kl(Request $request)
       {
               $request->validate(
          [
                    'txt_ma_nv'=>'required',
                    'txt_sotien'=>'required|integer',
                  'txt_ngay_kyluat'=>'required',
                    'txt_lydo'=>'required',
               ],
             [
                    'txt_ma_nv.required'=>'Mã nhân viên không được để trống!!!',
                    'txt_sotien.required'=>'Số tiền không được để trống!!!',
                    'txt_sotien.integer'=>'Số tiền phải là dạng ký tự số!!!',
                    'txt_ngay_kyluat.required'=>'Ngày kỷ luật không được để trống!!!',
                   
                    'txt_lydo.required'=>'Lý do không được để trống!!!',
                ]
                );
                    $kt=new Kyluat;
                    $kt->ma_nv =$request->txt_ma_nv;
                    $kt->sotien =$request->txt_sotien;
                    $kt->ngay_kyluat =$request->txt_ngay_kyluat;
                    $kt->lydo =$request->txt_lydo;
                   
                    $kt->save();
                    return redirect()->route('kyluat')->with('thongbao','Đã lưu thông tin thành công!!!');
          
       }
        public function sua_kl($ma_nv)
          {
            $data= DB::table('kyluat')->where('ma_nv',$ma_nv)->first();
           // dd($data);
            return view('kyluat.sua_kl',compact('data'));
          }
          public function capnhat_kl($id,Request $request)
            {
                DB::table('kyluat')-> where('id',$id)->update(
                    [
                     'ma_nv'=>$request->txt_ma_nv,
                     'sotien'=>$request->txt_sotien,
                     'ngay_kyluat'=>$request->txt_ngay_kyluat,
                     'lydo'=>$request->txt_lydo,
           
                    ]);
                    return redirect()->route('kyluat')->with('thongbao','Đã cập nhật thành công!!!');
            }
            public function xoa_kl($ma_nv)
                 {
                    DB::table('kyluat')->where('ma_nv',$ma_nv)->delete();
                    return redirect()->route('kyluat')->with('thongbao','Đã xóa thành công!!!');

                 }

}
