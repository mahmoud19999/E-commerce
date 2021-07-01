@extends('layout2')
@section('content')

   <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('front/img')}}/hero/category.jpg"> 
				
				
				
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Cart</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<section class="latest-product-area padding-bottom mt-5">

	@if(session()->has('success'))

<div class="alert alert-success">{{session()->get('success')}}</div>

@endif
	
            <div class="container">
         
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
							
							
					<div class="col-xl-4 col-lg-4 col-md-6 ml-5">
                                <div class="single-product mb-60">
                                    <div class="product-img">
      <img src="{{asset('uploads/clothes/'. $product->img)}}" alt="">
                              <h3>{{$product->name}}</h3>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                       <p>{{$product->desc}}</p>
										<p>Size {{$product->size}}</p>
                                       
                                    </div>
                                </div>
                            </div>	
							
									<div class="col-xl-4 col-lg-4 col-md-6 mt-5">
                                <div class="single-product mb-60">
     
								<ul >
									<li ><a href="{{route('co')}}"class="btn btn-warning">Buy now</a>
										<a href="{{route('clothes')}}" class="btn btn-danger">Cancel</a></li>
									      <div class="card_area">
                <div class="product_count_area">
                    <p>Quantity {{$product->quantity}}</p>
                    <div class="product_count d-inline-block">
                        <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                        <input class="product_count_item input-number" type="text" value="1" min="0" name="{{$product->quantity}}" max="10">
                        <span class="product_count_item number-increment"> <i class="ti-plus"></i></span> 
                    </div>
                </div>
              <div class="add_to_cart">
				                      <p>Price {{$product->price}} $</p>

                  <a href="{{route('add',$product->id)}}" class="btn_3">add to cart</a>
				  
              </div>
            </div>
								
								</ul>	
									
                                </div>
                            </div>
							
							
                  
                          
                        </div>
                    </div>
                    <!-- Card two -->
                 
					
                </div>
                <!-- End Nav Card -->
            </div>
        </section>

@endsection