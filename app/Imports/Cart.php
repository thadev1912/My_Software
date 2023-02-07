<?php
namespace App\Imports;
class Cart
 {
   
	public $items = null;
	//public $totalQty = 0;
	//public $totalPrice = 0;

	public function __construct($oldCart )
  {
  dd($oldCart->$items);
		
    if($oldCart){
			$this->items = $oldCart;  // lay ra danh sach mang item vi khong no se bao gom qty va price, va iem
			//$this->totalQty = $oldCart;
			//$this->totalPrice = $oldCart;
       
		}
		
	}

	public function add($item, $id){
		$giohang =  // add id truy van tu database vao mang
    ['qty'=>0, 
     'price' => $item->price,
     'item' => $item,
   ];
   dd($this->items);
		if($this->items){
            dd(array_key_exists($id, $this->items['id']));
			if(!array_key_exists($id, $this->items['id']))
			{
				
				{
				   $giohang['item'] = $this->items['id'];
          	    }
		}
      
      //dd($this->items);
      //dd($giohang);
      $this->items[$id] = $giohang;
		$giohang['qty']=+1;
		$giohang['price'] = $item->price * $giohang['qty'];
		
		//$this->totalQty=1;
		//$this->totalPrice += $item->price;
	}
}
	//xóa 1
	public function reduceByOne($id)
	{
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
 }
  
    

