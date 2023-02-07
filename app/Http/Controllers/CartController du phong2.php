<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Imports\Cart;
use App\Models\Product;
class CartController extends Controller
{
    public function show()
    {
       $data=DB::table('product')->get();
       //dd($data);
       return view('show.show',compact('data'));
       
       
    }
    public function giohang()
     {
      return view('show.giohang');
     }
    public function add(Request $request,$id)
     {
       $data=DB::table('product')->where('id',$id)->first();
      // dd($data);
        $gh= session()->get('cart') ? session()->get('cart') :null;          
        $add=new Cart($gh);
        //  dd($gh);
        $add->add($id);   
        //dd($add);    
        $request->session()->push('cart', $add);
        $request->session()->get('cart');
        return redirect()->route('store');    
      //dd($get);    
       
      
     }
     public function store ()
     {
       foreach(Session::get('cart') as $test)
       {
       dd($test);
       }
 
      }
        public function check()  
        {
          $all = Session::all(); //cách thứ nhất
          dd($all);     
        }     
      public function deleted($id) 
       {

       }    
    
     public function xoa(Request $request)
     {
      $request->session()->flush();
     }
    }
    