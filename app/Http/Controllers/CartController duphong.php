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
      
      
      $request->session()->push('cart.id', $data);
      $request->session()->get('cart.id');  
      return redirect()->route('giohang');  
      // if(session()->has('cart'))
      // {
      //   $old=$request->session()->get('cart');
      // }
      // else
      // { 
      //   $old='gio hang dang rong trong';
      // }
     
         //dd($old);
         //dd($data->id);
         //$add=new Cart($old);
        // $add->Addcart($old,$data->id);
         //dd($add);
        //dd($add->Addcart($old,$id));
      //  $request->session()->push('cart', $add);
      //  $request->session()->get('cart');
                     
      // $request->session()->put('cart','demo');
      // $session= $request->session()->get('cart');    
      
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
           
    
     public function xoa(Request $request)
     {
      $request->session()->flush();
     }
    }
    