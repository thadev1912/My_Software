<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phepnam;
use DB;
use Carbon\Carbon;
class PhepnamController extends Controller
{
    public function phepnam($ma_nv) 
    {
    $data= DB::table('phepnam')
    ->join('nhanvien','phepnam.ma_nv','=','nhanvien.ma_nv')
    ->join('hopdong','phepnam.ma_nv','=','hopdong.ma_nv')
    ->where('ma_nv',MFNV01)
    ->first(); 
     dd($data);
    return view('phepnam.phepnam',compact('data'));
    
    }
    
    //learn date_time with Carbon package
    public function example1_day()
    {
    
return floor(Carbon::parse('2021/10/10')->diffInDays(Carbon::parse('2022/8/10'))/30)-2;
   
}
   public function example2_day()
   {
    $fdate = ('2022/10/10');
    $tdate = ('2021/8/12');
    $datetime1 = new DateTime($fdate);
    $datetime2 = new DateTime($tdate);
    $interval = $datetime1->diff($datetime2);
   echo  $days = $interval->format('%a');//format chuyển qua chuổi string

   }
}


//     $mytime =Carbon::yesterday('Asia/Ho_Chi_Minh')->format('d-m-Y');
    //     $mytime1 =Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
    //   // echo $mytime->toDateTimeString();
    //   //  echo $mytime; 
    //   //  echo $mytime1;
    //   //   return new Carbon('first day of January 2016');        
    //   //  dd($mytime);
    //      $data= Carbon::create('2022','10','15');
    // // dd($data);
    //     // echo $data->toDateTimeString();
    //     // echo $data->addYear(5);
    //     $result=Carbon::now()->format('d-m-Y');
    //     echo $result;


//     $fday=  Carbon::parse('2021/10/10');
//     $lday=  Carbon::parse('2022/8/10');  
//    // echo $fday;
//   //  echo $lday;
//      $day=floor($lday->diffInDays($fday)/30);
//      echo $day;
