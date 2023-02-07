<?php
namespace App\Imports;
class Cart
{
    protected $product= null;
   // protected $totalprice=0;
    //protected $totalquanti=0;
    public function __construct($model)
    {
          $this->product=$model;
         // $this->totalprice=$model[$price];
          //$this->totalquanti=$model->totalquanti;
          //dd($this->product);
    }
    public function Addcart($cart,$id)
    {
      //dd($cart['id']); 
     //dd($id); 
       
            $newproduct=
            [
              
                'sp'=>$cart,
                'soluong'=>1,
                //'gia'=>0,
            ]; 
            //dd($newproduct); 
            //dd($cart);
            if(array_key_exists($id,$cart))
            
             {
                
                //echo "co ton tai";
                 $newproduct=$cart[$id];   
                 
                //dd($newproduct);       
                //$newproduct['soluong']++;
                //dd($newproduct['soluong']);
                //$newproduct['gia']=$newproduct['soluong']*$newproduct['gia'];              
                //$this->product[$id]=$newproduct;
                //dd( $this->product[$id]);
                //$this->totalprice+=$product->price;
                //$this->totalquanti++;
             }
            
             $this->product[$id]=$newproduct;   
             //dd($this->product[$id]=$newproduct);   
                 
         }
       
    }

