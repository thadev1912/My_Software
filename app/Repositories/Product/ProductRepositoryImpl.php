<?php

namespace App\Repositories\Product;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Giohang;

class ProductRepositoryImpl implements ProductRepository
{
    public function findAll()
    {
        return Product::get();
    }

    public function find($id)
    {
        return Product::find($id);
    }
    public function findAll_gh()
    {
        return Giohang::get();
    }
    
    public function find_gh($id)
    {
        return Giohang::find($id);
    }
    public function find_phone()
    {
      return Product::where('danhmuc','dienthoai')->get();
    }
    public function find_laptop()
    {
      return Product::where('danhmuc','laptop')->get();
    }
    public function find_watch()
    {
      return Product::where('danhmuc','dongho')->get();
    }
    public function timkiem_shop($search)
    {      
      return Product::where('name', 'like','%'.$search.'%')->get();
    }

}