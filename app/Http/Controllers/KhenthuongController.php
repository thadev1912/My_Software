<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Khenthuong;
use DB;
class KhenthuongController extends Controller
{
     public function khenthuong()
       {
       $khenthuong=DB::table('khenthuong')
       ->join('nhanvien','khenthuong.ma_nv','=','nhanvien.ma_nv')
       ->paginate(5);
       return view('khenthuong.khenthuong',compact('khenthuong'));
          
       }
       public function them_kt()
       {

        return view('khenthuong.them_kt');
       }
       public function luu_kt(Request $request)
       {
               $request->validate(
                [
                    'txt_ma_nv'=>'required',
                    'txt_sotien'=>'required|integer',
                    'txt_ngay_khenthuong'=>'required|date',
                    'txt_lydo'=>'required',
                ],
                [
                    'txt_ma_nv.required'=>'Mã nhân viên không được để trống!!!',
                    'txt_sotien.required'=>'Số tiền không được để trống!!!',
                    'txt_sotien.integer'=>'Số tiền phải là dạng ký tự số!!!',
                    'txt_ngay_khenthuong.required'=>'Ngày khen thưởng không được để trống!!!',
                    'txt_ngay_khenthuong.date'=>'Vui lòng nhập đúng định dạng ngày tháng!!!',
                    'txt_lydo.required'=>'Lý do không được để trống!!!',
                ]
                );
                    $kt=new Khenthuong;
                    $kt->ma_nv =$request->txt_ma_nv;
                    $kt->sotien =$request->txt_sotien;
                    $kt->ngay_khenthuong =$request->txt_ngay_khenthuong;
                    $kt->lydo =$request->txt_lydo;
                    $kt->save();
                    return redirect()->route('khenthuong')->with('thongbao','Đã lưu thông tin thành công!!!');
          
       }
        public function sua_kt($id)
          {
            $data= DB::table('khenthuong')->where('id',$id)->first();
           // dd($data);
            return view('khenthuong.sua_kt',compact('data'));
          }
          public function capnhat_kt($id,Request $request)
            {
                DB::table('khenthuong')-> where('id',$id)->update(
                    [
                     'ma_nv'=>$request->txt_ma_nv,
                     'sotien'=>$request->txt_sotien,
                     'ngay_khenthuong'=>$request->txt_ngay_khenthuong,
                     'lydo'=>$request->txt_lydo,
           
                    ]);
                    return redirect()->route('khenthuong')->with('thongbao','Đã cập nhật thành công!!!');
            }
            public function xoa_kt($id)
                 {
                    DB::table('khenthuong')->where('id',$id)->delete();
                    return redirect()->route('khenthuong')->with('thongbao','Đã xóa thành công!!!');

                 }

}
