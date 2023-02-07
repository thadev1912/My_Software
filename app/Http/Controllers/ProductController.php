<?php

namespace App\Http\Controllers;

use App\Repositories\Product\ProductRepository;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $data = [
            'products' => $this->productRepository->findAll(),
            'phones'=>$this->productRepository->find_phone(),
            'laptops'=>$this->productRepository->find_laptop(),
            'watchs'=>$this->productRepository->find_watch(),
        ];
    //dd($data);
        return view('cart/index')->with($data);
    }
    public function timkiem_shop(Request $res)
     {
        $search=$res->get('search');
        //dd($search);
        $data = [
            'timkiem' => $this->productRepository->timkiem_shop($search),
           
        ];      
        if($data)
        {
      return response()->json([
        'data'=>$data,
        'status'=>200,
        'messeage'=>"Lấy dữ liệu thành công!!!"
      ]);



     }
     else
     {
             return response()->json([
            'data'=>null,
            'status'=>400,
            'messeage'=>"Lỗi!!!"
          ]);
     }
     }
}