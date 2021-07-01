@extends('layout2')
@section('content')

   <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="front/img/hero/category.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Welcome to Laptop category</h2>
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
                        <div class="row">
                         
													@foreach($laptop as $l)
							
						            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
      <img src="{{asset('uploads/Laptop/'. $l->img)}}" alt="">
                              <h3 class="mt-3">{{$l->name}}</h3>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
											                                            <i class="far fa-star"></i>

											
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                       <p>{{$l->desc}}</p>
										<p>Price {{$l->price}} $</p>
                                        <div class="price">
                                            <ul>
                                             
						<button class="btn btn-info">Buy Now</button>
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