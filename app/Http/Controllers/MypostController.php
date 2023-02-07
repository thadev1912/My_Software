<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Mypost;
use DB;
class MypostController extends Controller
{
    public function fetch_data(Request $request)
      {
        $get=Http::get('http://localhost/sieuga/Quanlynhansu/public/api/post');
       
        $data=json_decode($get->body());  
        dd($data); 
        if (is_array($data) || is_object($data)) 
        {
        foreach($data as $dt)
           {
            if (is_array($dt) || is_object($dt)) 
            {
               DB::table('mypost')->delete();
              foreach($dt as $d)
                 {
                       
                  $mypost=new Mypost;
                  $mypost->id_baiviet=$d->ma_post;                   
                  $mypost->tieude_baiviet=$d->title_post; 
                  $mypost->noidung_baiviet=$d->content_post; 
                  $mypost->danhmuc_baiviet=$d->danhmuc_post;  
                  $mypost->created_at=$d->created_at; 
                  $mypost->updated_at=$d->updated_at;  
                  $mypost->save();
                 
                 }
                }
           }
            return redirect()->route('mypost')->with('thongbao','Cập nhật dữ liệu thành công!!!');
        }
        else
        {
            echo "Vui lòng kiểm tra lại!!!";
        }
       
      }
      public function mypost()
         {
            $data=Mypost::paginate(5); // cách dùng phân trang nhanh            
            return view('mypost.mypost',compact('data'));

         }

}
