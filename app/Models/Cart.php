<?php

namespace App\Models;



class Cart
{

	public $items=[];
	public $totalQty;
	public $totalPrice;
	
	function __construct($cart = null)
	{
		if($cart)
		{
			$this->items=$cart->items;
			$this->totalQty=$cart->totalQty;
			$this->totalPrice=$cart->totalPrice;	
		}
		else
		{
			$this->items=[];
			$this->totalQty=0;
			$this->totalPrice=0;	
		}
	}
	
	function add($product) 
	{
		$item=[
		'id'=> $product->id,
		'name' => $product->name,
        'desc' => $product->desc,
		'price' => $product->price,
		'size' => $product->size,	
				'img' => $product->img,	
	
		'quantity' => 0,
		'voucher' => -50,	
		];
		
		if(!array_key_exists($product->id, $this->items))
		{
			$this->items[$product->id]=$item;
			$this->totalQty +=1;
			$this->totalPrice += $product->price;
		}
		else
		{
			$this->totalQty +=1;
			$this->totalPrice += $product->price;

		}
		$this->items[$product->id]['quantity'] += 1;
	}
	
	function remove($id)
	{
		if(array_key_exists($id, $this->items))
		{
			$this->totalQty -= $this->items[$id]['quantity'];
		$this->totalPrice -= $this->items[$id]['quantity'] * $this->items[$id]['price'];
			unset($this->items[$id]);
		}
	}
	
	function updateQty($id, $quantity)
	{
		$this->totalQty -= $this->items[$id]['quantity'];
		$this->totalPrice -= $this->items[$id]['price'] * $this->items[$id]['quantity'];
		
		 $this->items[$id]['quantity']=$quantity;
		
		$this->totalQty +=$quantity;
		
        $this->totalPrice += $this->items[$id]['price'] * $quantity;
	}
}


