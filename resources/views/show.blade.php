@extends('layout2')
@section('content')

<div class="container">
    
<div class="row">
   @if($cart) 

<div class="col-md-8">
	
			@if($errors->any()) 
@foreach($errors->all() as $error)
<h5 class="alert alert-danger">{{$error}}</h5>
@endforeach
@endif
	
@foreach($cart->items as $product)

<div class="card mb-2">

<div class="card-body">

<h5 class="card-title"> {{$product['name']}}</h5>
<div class="card-text">
<p>$ {{$product['desc']}}</p>

<p>$ {{$product['price']}}</p>
	
	
	

	
	
<form action="{{route('update' , $product['id'])}}" method="post">
@csrf	
	@method('put')
	<input type="text" name="quantity" id="quantity" value="  {{$product['quantity']}} ">
	
	<button type="submit" class="btn btn-danger btn-sml">Cahnge</button>
	</form>
	


	
	
<form action="{{route('remove' , $product['id'])}}" method="post">
@csrf	
	@method('delete')
	
	<button type="submit" class="btn btn-danger btn-sml ml-4 float-right" style="margin-top: -55px">Remove</button>
	</form>
	
</div>
</div>

</div>
@endforeach

<p><strong>Total : ${{$cart->totalPrice}}</strong></p>
	
	<label class="mt-2">Use <strong> Voucher</strong></label>
<input class="form-control w-25 rounded-circle" placeholder="Enter Voucher Here">
</div>
	
	
	
<div class="col-md-4">
<div class=" text-white">
    
<div class="card-body">

<h3 class="card-titel"> Your Cart <hr><h3>

<div class="card-text">

	<p>Total Amount is <strong> ${{ $cart->totalPrice}}</strong></p>

	<p>Total Quantities is <strong> {{ $cart->totalQty}}</strong></p>



<a class="btn btn-info" href="{{route('stripe', $cart->totalPrice)}}">Checkout</a>


</div>

</div>
	</div>
</div>

</div>
	
	</div>
	
@else
<p>there no items in the cart</p>

@endif

</div>

</div>


@endsection