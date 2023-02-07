<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Imports\UsersImport;
use DB;
use App\Models\Dulieuchamcong;
use Carbon\Carbon;
class DulieuchamcongController extends Controller
{
    
    public function getform(){
        return view('chamcong.getform');
    }
    public function dulieu_chamcong(Request $request)
      {    
             $query = $request->all();
             $timkiem_ten=$request->timkiem_ten;
             $timkiem_ngay=$request->timkiem_ngay;
             if($query)
             {
            $result= DB::table('dulieuchamcong')
            -> join('nhanvien','dulieuchamcong.ma_nv','=','nhanvien.ma_nv');  
            if(isset($timkiem_ten))  
            $result=$result->where('dulieuchamcong.ma_nv','like',"%".$timkiem_ten."%")
            ->orwhere('nhanvien.hoten_nv','like',"%".$timkiem_ten."%");           
            if(isset($timkiem_ngay))  
           // $result=$result->where('dulieuchamcong.ma_nv','like',"%".$timkiem_ten."%")
          //  ->orwhere('nhanvien.hoten_nv','like',"%".$timkiem_ten."%") 
           // ->where('dulieuchamcong.ngay_chamcong','=',$timkiem_ngay);
             $result=$result->where('dulieuchamcong.ngay_chamcong','=',$timkiem_ngay);
             if(isset($timkiem_ten)&&($timkiem_ngay))
              $result=$result->where('dulieuchamcong.ma_nv','like',"%".$timkiem_ten."%")
            ->orwhere('nhanvien.hoten_nv','like',"%".$timkiem_ten."%") 
            ->where('dulieuchamcong.ngay_chamcong','=',$timkiem_ngay);
             $result=$result->paginate(10);                 
            return view('chamcong.dulieuchamcong',compact('result','query'));    
             }
             else
             {
                $result=  DB::table('dulieuchamcong')
                -> join('nhanvien','dulieuchamcong.ma_nv','=','nhanvien.ma_nv')               
                ->select('dulieuchamcong.*','nhanvien.*')          
                ->paginate(10); 
                return view('chamcong.dulieuchamcong',compact('result'));          
                 //  dd($result);
            
            }
           
             }
          
   public function import(Request $request){
        if($request->file('file'))
        {
            $import =  Excel::import(new UsersImport, request()->file('file'));
          
            $msg_success = "Data Uploaded Succesfully! ";
            $msg_danger = "Data Uploaded failed! ";
            if ($import) {
                return redirect()->route('dulieu_chamcong')->with('success', strtoupper($msg_success));
            }else{
               return redirect('/')->with('danger', strtoupper($msg_danger));
            }
        }
        else{
            $msge = "please choose your file! ";
            return redirect('/')->with('choose_file', strtoupper($msge));
        }
    }
        // public function dulieu_chamcong()
        // {
        //         $result=  DB::table('dulieuchamcong')
        //         -> join('nhanvien','dulieuchamcong.ma_nv','=','nhanvien.ma_nv')               
        //        ->select('dulieuchamcong.*','nhanvien.*')          
        //         ->paginate(10);             
        //         return view('chamcong.dulieuchamcong',compact('result'));
        // }
        public function bangchamcong1()
         {
        //    $data= DB::table('dulieuchamcong')
        //     ->select(DB::raw('count(*) as category_count'))
        //     ->where('ma_ nv',$ma_nv)
        //     ->get();
        //     dd($data);
         
      //   $giovao=Carbon::parse('2022-01-01');
       //  $giora=Carbon::parse('2022-01-02');
      
        // dd($giora);
      //  $count=$giora->diffInHours($giovao);
     //   dd($count);
    

         
         $info= (Carbon::parse($giora)->diffInHours(Carbon::parse($giovao)));  
       //  dd(gio_ra);       
        // ->select('ma_nv',DB::raw('sum(8-2 ) as total'))
       //  ->groupBy('ma_nv')          
      //   ->get();
         ///nhap
              return view('chamcong.bangchamcong',compact('data'));
            //   $giovao='2022-01-01';
           // $giora='2022-01-02';
           // $info= (Carbon::parse('dulieuchamcong.giovao')->diffInHours(Carbon::parse('dulieuchamcong.giora')));  
            
             
              //dd($ngay);
            //  ->select(DB::raw('sum(gio_ra) as total') )     
           $data=$data->select('ma_nv',DB::Raw(Carbon::parse($giora)->diffInHours(Carbon::parse($giovao))))
           ->groupby('ma_nv')      
           ->get();
            dd($data);
            
         }
         public function bangluong()
          {
                  $data= DB::table('dulieuchamcong')
                  ->join('nhanvien','dulieuchamcong.ma_nv','=','nhanvien.ma_nv') 
                  ->join('phongban','dulieuchamcong.ma_pb','=','phongban.ma_pb')  
                  ->join('hopdong','dulieuchamcong.ma_nv','=','hopdong.ma_nv')                           
                  ->select('dulieuchamcong.ma_nv','hoten_nv','ten_pb','heso_luong','phu_cap',DB::raw('sum(  (((gio_ra - gio_vao)*0.60)*0.60)/3600-1.0)/8 as total'))
                  ->groupBy('ma_nv','hoten_nv','ten_pb','heso_luong','phu_cap')
                  ->get();
                  // dd($data);
                   return view('chamcong.bangluong',compact('data'));
          }
          public function chitiet_bangluong($code)
          {
              $data_nv=DB::table('nhanvien')
              ->join('phongban','nhanvien.ma_pb','=','phongban.ma_pb')
              ->join('chucvu','nhanvien.ma_cv','=','chucvu.ma_cv')                        
              ->select('nhanvien.ma_nv','nhanvien.anhdaidien','nhanvien.hoten_nv','phongban.ten_pb','chucvu.ten_cv')             
              ->where('nhanvien.ma_nv',$code)
              ->first();
               //dd($data_nv);
               $data_cc=DB::table('nhanvien')
               ->join('dulieuchamcong','nhanvien.ma_nv','=','dulieuchamcong.ma_nv') 
               ->select('dulieuchamcong.ma_nv',DB::raw('sum(  (((gio_ra - gio_vao)*0.60)*0.60)/3600-1.0)/8 as total')) 
               ->groupBy('ma_nv')
               ->where('nhanvien.ma_nv',$code)
               ->first();
               //dd($data_cc);
               $data_hd=DB::table('hopdong')
               ->join('nhanvien','nhanvien.ma_nv','=','hopdong.ma_nv')
               ->select('hopdong.heso_luong','hopdong.phu_cap',)
               ->where('nhanvien.ma_nv',$code)
               ->first();
               $data_pn=DB::table('phepnam')
               ->join('nhanvien','phepnam.ma_nv','=','nhanvien.ma_nv')
               ->select('phepnam.*')
               ->where('nhanvien.ma_nv',$code)
               ->first();
               $data_bh=DB::table('baohiem')
               ->join('nhanvien','nhanvien.ma_nv','=','baohiem.ma_nv')
               ->select('baohiem.tiendong_bhxh')
               ->where('nhanvien.ma_nv',$code)
               ->first();
               $data_kt=DB::table('khenthuong')
               ->join('nhanvien','nhanvien.ma_nv','=','khenthuong.ma_nv')
               ->select('khenthuong.sotien')
               ->where('nhanvien.ma_nv',$code)
               ->first();
               
               $data_kl=DB::table('kyluat')
               ->join('nhanvien','nhanvien.ma_nv','=','kyluat.ma_nv')
               ->select('kyluat.sotien')
               ->where('nhanvien.ma_nv',$code)
               ->first();              
              return view('chamcong.chitiet_bangluong',compact('data_nv','data_cc','data_hd','data_pn','data_bh','data_kt','data_kl'));
              

          }
      
}
