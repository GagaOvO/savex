<?php

namespace savex;

class Cart extends Model
{
    public $items=null;
	public $TotalQty=0; 
	public $TotalPrice=0;


	// Build a construct to access the previous Cart if there is one

	public function __construct($oldcart)
	{
		if($oldcart)
		{

			$this->items =$oldcart->items;
			$this->TotalQty =$oldcart->TotalQty;
			$this->TotalPrice =$oldcart->TotalPrice;
		}
	}

	public function add($item , $id)
	{
	
	$storedItem= ['qty'=> 0 , 'price' => $item->price, 'item' =>$item ];

		if ($this->items)
		{
			if(array_key_exists($id, $this->items))
			{
				$storedItem= $this->items[$id];
			}
		}

		$storedItem['qty']++;
		$storedItem['price'] = $item->price * $storedItem['qty'];
		$this->items[$id] = $storedItem;
		$this->TotalQty++;
		$this->TotalPrice += $item->price;
	}
}
