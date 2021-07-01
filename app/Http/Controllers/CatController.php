<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothe;
use App\Models\Mobile;
use App\Models\Camera;
use App\Models\Laptop;
use App\Models\Setting;
use App\Models\Confirm;
use App\Models\Cart;
use App\Models\Payment;
use Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Arr;
use Session;


use Alert;





class CatController extends Controller
{
  function clothes()
	{

	  if(session('success'))
	  {
		  toast(session('success'), 'success');
	  }
	  
	 $data['clothes']=Clothe::select('id','img','name','desc','size')->get();
		
		return view('clothes')->with($data);
	}
	
	function mobiles()
	{
	$data['m']=Mobile::select('id','img','name','desc','price')->get();

		return view('mobiles')->with($data);
	}
	
	function camera()
	{
	$data['camera']=Camera::select('id','img','name','desc','price')->get();

		return view('camera')->with($data);
	}
	
	function laptop()
	{
			$data['laptop']=Laptop::select('id','img','name','desc','price')->get();

		return view('laptop')->with($data);
	}
	
	function contact()
	{
		$data['settings']=Setting::first();
		return view('contact')->with($data);
	}
	
	function cart($id)
	{
		$data['product']=Clothe::findorfail($id);
		return view('cart')->with($data);


	}
	
	function confirm()
	{
		return view('confirm');
	}
	
	function co(Request $request)
	{
		$data=$request->validate([
		
		'name'=>'required|string|max:190',
		'email'=>'required|email|max:50',
		'phone'=>'required|string|max:190',
		
			
		]);
		
		Confirm::create($data);
				return view('confirmation cart');

	}
	
	function con()
	{
		return view('confirmation cart');
	}
	
	function Addcart()
	{
		$data['cartt']=Clothe::all();
		return view('Addtocart')->with($data);
	}
	
	public function handleGet()
    {
        return view('checkout');
    }
  
    /**
     * handling payment with POST
     */
    public function handlePost(Request $request)
    {
        Stripe::setApiKey(env('sk_test_51IUhrGHqHYAunHIX2lYB1Xa7AMDYsl0ptCUE32Lo5aq2y5RUW8LIUbT2fS3i25eTjn6A5lvRfWpQg6Wsih86xmRf00fGKjoRTC'));
        Stripe\Charge::create ([
                "amount" => 100 * 150,
                "currency" => "inr",
                "source" => $request->stripeToken,
                "description" => "Making test payment." 
        ]);
  
        Session::flash('success', 'Payment has been successfully processed.');
          
        return back();
    }

	
	    function addToCart(Clothe $c)
	{
		if(session()->has('cart'))
		{
			$cart=new Cart(session()->get('cart'));
		}
		else
		{
			$cart=new Cart();
		}
		$cart->add($c);
		//dd($cart);
        session()->put('cart', $cart);
        return redirect()->route('clothes')->with('success','product was added');

	}
	
	function showCart()
	{
		if(session()->has('cart'))
        {
            $data['cart']=new Cart(session()->get('cart'));
        }
        else
        {
            $data['cart']=null;
        }
        return view('show')->with($data);
	}
	

	
	
	
	function charge(Request $request)
	{
		
	}
	
	function pay(Request $request)
		
	{
	
		
		$data=$request->validate([
			
        'Credit-Card'=>'required|string|max:8',
					
		]);
		
		Payment::create($data);
		return view('confirmation cart');
		
	}
	
	
	function destroy(Clothe $product)
	{
	 $cart=new Cart(session()->get('cart'));
	 $cart->remove($product->id);
		
	if($cart->totalQty <= 0)
	{
		session()->forget('cart');
	}
		else
		{
			session()->put('cart',$cart);
		}
		
		     return redirect()->route('show')->with('success','product was removed');
     }
	
	function update(Request $request, Clothe $product)
	{
			$data=$request->validate([
			
        'quantity'=>'required|numeric|min:1',
					
		]);
		
	 $cart=new Cart(session()->get('cart'));
	 $cart->updateQty($product->id, $request->quantity);	
	session()->put('cart',$cart);
			     return redirect()->route('show')->with('success','product updated');

	}
}
