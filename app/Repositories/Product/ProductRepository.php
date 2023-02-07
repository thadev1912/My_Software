<?php

namespace App\Repositories\Product;
use Illuminate\Http\Request;
interface ProductRepository
{
    public function findAll();
    
    public function find($id);
   
    public function findAll_gh();
    public function find_gh($id);
    public function find_phone();
    public function find_laptop();
    public function find_watch();
    public function timkiem_shop($search);
}