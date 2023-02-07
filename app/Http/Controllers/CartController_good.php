<?php

namespace App\Http\Controllers;

use App\Repositories\Product\ProductRepository;
use Illuminate\Http\Request;
use Auth;
use App\Models\Donhang;
use App\Models\Giohang;
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
       $giohang= DB::table('product')->get();
       //dd($giohang);
       foreach($giohang as $item)
             {
                       dd($item->id);
                       $cart = array();
                       array_push($cart, [
                                            'product' => $this->productRepository->find($item->id),
                                            'quantity' => 1,
                                         ]);
                       $request->session()->put('cart', $cart);
             
        
        $data = [
            'cart' => $request->session()->get('cart')
        ];
    }
        //dd($data);
        return view('cart.giohang')->with($data);
        
        
    }

    public function buy($id, Request $request)
    {
        if (!$request->session()->has('cart')) {
            $cart = array();
            array_push($cart, [
                'product' => $this->productRepository->find($id),
                'quantity' => 1
            ]);
            $request->session()->put('cart', $cart);
        } else {
            $cart = $request->session()->get('cart');
            $index = $this->exists($id, $cart);
            if ($index == -1) {
                array_push($cart, [
                    'product' => $this->productRepository->find($id),
                    'quantity' => 1
                ]);
            } else {
                $cart[$index]['quantity']++;
            }
            $request->session()->put('cart', $cart);
        }
        //dd($cart);
        return redirect()->route('shop');
        
    }

    public function remove($id, Request $request)
    {
        $cart = $request->session()->get('cart');
        $index = $this->exists($id, $cart);
        unset($cart[$index]);
        $request->session()->put('cart', array_values($cart));
        return redirect('giohang');
    }

    public function update(Request $request)
    {
        $quantities = $request->input('quantity');
        $cart = $request->session()->get('cart');
        //dd(($quantities[0]));
        //dd(count($cart));
        
           for ($i = 0; $i < count($cart); $i++)   //count đếm phần tử mạng            
              {
                      $cart[$i]['quantity'] = $quantities[$i];// mỗi phần tử mạng trong quantites tương ứng số lượnsản phẩm hiện tại đang nhập                       
                      if($cart[$i]['quantity']>0)
                      {
                        $request->session()->put('cart', $cart);// chền lần lượt theo dòng $i                         
                      }
                      else
                      {
                        unset($cart[$i]);
                        $request->session()->put('cart', array_values($cart));
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
       
        if(Auth::check())
        {           
              if($request->thanhtoan=='cash')
                    {  
                       $dh=new donhang;
                       $dh->ma_kh=Auth::user()->name;
                       $dh->hoten=$request->txt_hoten;
                       $dh->diachi=$request->txt_diachi;
                       $dh->sdt=$request->txt_sdt;
                       $cart=$request->session()->get('cart');
                       $total=0;
                       $qty=0;
                         foreach($cart as $item)
                            {
                                $total=$total+$item['product']->price*$item['quantity']; 
                                $qty =$qty+$item['quantity'];
                            }
                         
                        $dh->dongia_sp=$total;
                        $dh->soluong_sp=$qty;
                        $dh->tonggia_sp=$total-(540000);
                        $dh->save(); 
                        $request->session()->forget('cart');                     
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
   
}