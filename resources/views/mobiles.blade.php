@extends('layout2')
@section('content')

   <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="front/img/hero/category.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Welcome to Mobiles category</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<section class="latest-product-area padding-bottom mt-5">
            <div class="container">
         
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						@if(session()->has('success'))

<div class="alert alert-success">{{session()->get('success')}}</div>

@endif
                        <div class="row">
							
							@foreach($m as $m)
							
						            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
      <img src="{{asset('uploads/Mobiles/'. $m->img)}}" alt="">
                              <h3 class="mt-3">{{$m->name}}</h3>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
											                                            <i class="far fa-star"></i>

											
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                       <p>{{$m->desc}}</p>
										<p>Price {{$m->price}} $</p>
                                        <div class="price">
                                            <ul>
                                             
    <a href="{{route('add', $m->id)}}" class="btn btn-primary">Buy</a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>	
							
					@endforeach		
                  
                          
                        </div>
                    </div>
                    <!-- Card two -->
                 
					
                </div>
                <!-- End Nav Card -->
            </div>
        </section>

@endsection