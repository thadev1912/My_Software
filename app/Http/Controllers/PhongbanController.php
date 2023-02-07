<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phongban;
use DB;
class PhongbanController extends Controller
{
    public function phongban()
        {
            $phongban=DB::table('phongban')->paginate(5);        
            return view('phongban.phongban',compact('phongban'));
            
        }
    public function them_pb()
         {
             return view('phongban.them_phongban');
         }
         public function luu_pb(Request $request)
          {
            DB::table('phongban')->insert(
                [
                    'ma_pb'=>$request->txt_ma_pb,
                    'ten_pb'=>$request->txt_ten_pb,
                ]
                );
                return redirect()->route('phongban')->with('thongbao','Đã Thêm Phòng Ban Thành Công!!!');
          }
          public function sua_pb($id)
            {
              $data=  DB::table('phongban')->where('id',$id)->first();
                return view('phongban.sua_phongban',compact('data'));
            }
            public function capnhat_pb($id,Request $request)
             {
                DB::table('phongban')->where('id',$id)->update(
                    [
                        'ma_pb'=>$request->txt_ma_pb,
                        'ten_pb'=>$request->txt_ten_pb,

                    ]);
                    return redirect()->route('phongban')->with('thongbao','Đã cập nhật Phòng Ban thành công!!!');
             }
             public function xoa_pb($id)
               {
                     DB::table('phongban')->where('id',$id)->delete();
                     return redirect()->route('phongban')->with('thongbao','Đã xóa phòng ban thành công!!!');
                      
               }
               public function hasmany()
                {
                    $data=Phongban::all();
                    foreach ($data as $dt)
                       {
                        dd($dt);
                        echo $dt->ten_pb;
                        echo "<br>";
                        foreach($dt->phongban as $info)
                           {
                            echo $info->hoten_nv;
                            echo "<br>";
                           }
                        echo "<hr>";
                       }

                }

}

