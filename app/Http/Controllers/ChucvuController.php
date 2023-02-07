<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chucvu;
use DB;
class ChucvuController extends Controller
{
    public function chucvu()
        {
            $chucvu=DB::table('chucvu')->paginate(5);        
            return view('chucvu.chucvu',compact('chucvu'));
            
        }
    public function them_cv()
         {
             return view('chucvu.them_cv');
         }
         public function luu_cv(Request $request)
          {
            DB::table('chucvu')->insert(
                [
                    'ma_cv'=>$request->txt_ma_cv,
                    'ten_cv'=>$request->txt_ten_cv,
                ]
                );
                return redirect()->route('chucvu')->with('thongbao','Đã Thêm Phòng Ban Thành Công!!!');
          }
          public function sua_cv($id)
            {
              $data=  DB::table('chucvu')->where('id',$id)->first();
                return view('chucvu.sua_cv',compact('data'));
            }
            public function capnhat_cv($id,Request $request)
             {
                DB::table('chucvu')->where('id',$id)->update(
                    [
                        'ma_cv'=>$request->txt_ma_cv,
                        'ten_cv'=>$request->txt_ten_cv,

                    ]);
                    return redirect()->route('chucvu')->with('thongbao','Đã cập nhật Phòng Ban thành công!!!');
             }
             public function xoa_cv($id)
               {
                     DB::table('chucvu')->where('id',$id)->delete();
                     return redirect()->route('chucvu')->with('thongbao','Đã xóa phòng ban thành công!!!');
                      
               }

}

