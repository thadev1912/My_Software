<?php

namespace App\Http\Controllers;

use App\Repositories\Product\ProductRepository;
use Illuminate\Http\Request;
use Auth;
use App\Models\Donhang;
use App\Models\Giohang;
use Carbon\Carbon;
//use App\Models\Demo;
use DB;

class CartController extends Controller
{
    protected $productRepository;
   
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
 

    public function giohang(Request $request)
    {
        $user=Auth::user()->name;
        //dd($user);
       $request->session()->forget('cart');
        //$cart = array();
       $giohang= DB::table('product')
       ->join('giohang','product.id','=','giohang.ma_sp')
       ->select('giohang.ma_sp')
       ->where('ma_user',$user)
       ->get();  
       //$cart = $request->session()->get('cart');
        //dd($giohang);  
         
           
          
       foreach($giohang as $item)
             {  
                if(!$request->session()->has('cart'))
                {
                    $cart = array();
                  array_push($cart, [
                      'product' => $this->productRepository->find($item->ma_sp),
                      'quantity' => 1,
                   ]);
                    $request->session()->put('cart', $cart);
                }
                else
                {   
                     $cart = $request->session()->get('cart');
                     $index = $this->exists($item->ma_sp, $cart);
                            if ($index == -1) {
                                               array_push($cart, [
                                               'product' => $this->productRepository->find($item->ma_sp),
                                               'quantity' => 1
                                                      ]);
                                              } 
                             else
                                             {
                                                $cart[$index]['quantity']++;
                                             }
                              $request->session()->put('cart',$cart);

                              
            
                     }
                    }
                     $data = [
                        'cart' => $request->session()->get('cart')
                    ];
                                        
        //dd($data);
        return view('cart.giohang')->with($data);
                                 
        
    }
    // public function giohang(Request $request)
    // {
    //     $data = [
    //         'cart' => $request->session()->get('cart')
    //     ];
    //     return view('cart.giohang')->with($data);
    // }

    public function buy($id, Request $request)
    {     
        $data=new giohang;
        $data->ma_sp=$id;
        $data->ma_user=Auth::user()->name;
        //dd($data->ma_user);     
        $data->save();
        
        // if (!$request->session()->has('cart'))
        //  {
        //     $cart = array();
        //     array_push($cart, [
        //         'product' => $this->productRepository->find($id),
        //         'quantity' => 1
        //     ]);
        //     $request->session()->put('cart', $cart);
        //     //dd($demo);
        // } 
        // else 
        // {
        //     $cart = $request->session()->get('cart');
        //     $index = $this->exists($id, $cart);
        //     if ($index == -1) {
        //         array_push($cart, [
        //             'product' => $this->productRepository->find($id),
        //             'quantity' => 1
        //         ]);
        //     } else {
        //         $cart[$index]['quantity']++;
        //     }
        //     $request->session()->put('cart', $cart);
            
       
        //dd($cart);
        return redirect()->route('shop');
    }
    

    public function remove($id, Request $request)
    {
        // $cart = $request->session()->get('cart');
        // $index = $this->exists($id, $cart);
        // unset($cart[$index]);
        // $request->session()->put('cart', array_values($cart));    
        //dd($info=$id);
        giohang::where('ma_sp',$id)->delete();
        return redirect()->route('shop');
    }

    public function update(Request $request)
    {   
        $user=Auth::user()->name;
        $quantities = $request->input('quantity');
        $cart = $request->session()->get('cart');
        //dd(($quantities[0]));
        //dd(count($cart));
        
           for ($i = 0; $i < count($cart); $i++)   //count đếm phần tử mạng            
              {
                      $cart[$i]['quantity'] = $quantities[$i];// mỗi phần tử mạng trong quantites tương ứng số lượng sản phẩm hiện tại đang nhập                       
                      
                      //if($quantities[$i]>0)
                      if($cart[$i]['quantity']>0)
                      {
                        $row=($cart[$i]['product']->id);        
                        giohang::where('ma_sp',$row)->delete();    
                                        
                        $qty=$quantities[$i];
                        //dd($row);
                        $j=0;
                        while($j<$qty)
                        {
                        
                         $data=new giohang;
                         $data->ma_sp=$row;  
                         $data->ma_user=Auth::user()->name;                       
                         $data->save();
                         $j++; 
                        
                                                 
                      
                        // $request->session()->put('cart', $cart);// chền lần lượt theo dòng $i                         
                      }
                    }
                   
                      //elseif($quantities[$i]==0)
                       else
                      {
                         $row=($cart[$i]['product']->id);
                         giohang::where('ma_sp',$row)
                         ->where('ma_user',$user)
                         ->delete();
                    //     //unset($cart[$i]);
                    //     //$request->session()->put('cart', array_values($cart));
                    //   }
                      }
                }                   
              return redirect('giohang');
    }
     public function payment(Request $request)
     {
        if($request->session()->has('cart'))
         {
            $cart=$request->session()->get('cart');          
         }
         else
         {
            echo "Danh sách rỗng";
         }
        return view('cart.thanhtoan',compact('cart'));
     }
     public function chotdeal(Request $request)
     {
        //dd(($request->cash=='checked'));
        $user=Auth::user()->name;
        $hoten=Auth::user()->hoten;
        $date=Carbon::today()->toDateString();
        //dd($date);
        $ma_dh='DHL_'.strtoupper(Auth::user()->name).'_'.$date;// tạo hóa đơn
        //dd($ma_dh);
        $sdt=Auth::user()->sdt;
        $diachi=Auth::user()->diachi;
        if(Auth::check())
        {           
              if($request->thanhtoan=='cash')
                    {  
                    //    $dh=new donhang;
                    //    $dh->ma_kh=$user;
                    //    $dh->hoten=$request->txt_hoten;
                    //    $dh->diachi=$request->txt_diachi;
                    //    $dh->sdt=$request->txt_sdt;
                    //    $cart=$request->session()->get('cart');
                    //    //dd($cart);
                    //    $total=0;
                    //    $qty=0;
                    $cart=$request->session()->get('cart');
                    //dd($cart);
                         foreach($cart as $item)
                            { 
                                //$sl=$item['quantity'];                                
                             
                               
                                          $gh=new donhang;
                                          $gh->ma_dh=$ma_dh;
                                          $gh->ma_user=$user; 
                                          $gh->hoten_user=$hoten; 
                                          $gh->sdt_user=$sdt;   
                                          $gh->diachi_user=$diachi;
                                          $gh->anh_sp=$item['product']->image;                                                               
                                          $gh->ten_sp=$item['product']->name;
                                          $gh->gia=$item['product']->price;
                                          $gh->sl=$item['quantity'];                                                                        
                                          $gh->save();
                                          giohang::where('ma_sp',$item['product']->id)
                                          ->where('ma_user',$user)
                                          ->delete();
                                       
                                     
                                   
                                // $total=$total+$item['product']->price*$item['quantity']; 
                                // $qty =$qty+$item['quantity'];
                                // $dh->ten_sp=$item['product']->name;
                                // $dh->dongia_sp=$total;
                                // $dh->soluong_sp=$qty;
                                // $dh->tonggia_sp=0;
                                // $dh->save(); 
                            }

                       
                        //$dh->dongia_sp=$total;
                        //$dh->soluong_sp=$qty;
                       //$dh->tonggia_sp=$total-(540000);
                       
                       // giohang::where('ma_user',$user)->delete();
                        
                         
                       // $request->session()->forget('cart');  hàm dùng cho unset session               
                        return redirect()->route('shop');
                    }
              else
                    {
                          echo "vui lòng chọn lại!!";
                    }         
        }
        else
        {
            echo "vui lòng đăng nhập";
        }
    }
    private function exists($id, $cart)
    {
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]['product']->id == $id) {
                return $i;
            }
        }
        return -1;
    }
    public function donhang()
    {
        $user=Auth::user()->name;
        $donhang=DB::table('donhang')
        ->where('ma_user',$user)
        ->get();
        //dd($donhang);
        return view('cart.donhang',compact('donhang'));
        
    }
   
}