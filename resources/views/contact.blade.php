@extends('layout2')
@section('content')

  <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="front/img/hero/category.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <section class="contact-section">
            <div class="container">
                
                   {!! $settings->map !!}
    
                </div>
    
    
                <div class="row">
                    
                    <div class="col-lg-8">
			@include('error')			
<form method="post" action="{{route('contact2')}}" class="ml-5 mt-5">
	@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email</label>
      <input type="email" name="email" class="form-control" id="inputPassword4" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Subject</label>
    <input type="text" name="subject" class="form-control" id="inputAddress" placeholder="subject">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Message</label>
    <input type="text" name="message" class="form-control" id="inputAddress2" placeholder="Message">
  </div>
  <div class="form-row">
  
 
   
  </div>
 
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

						
                    </div>
                    <div class="col-lg-3 offset-lg-1 mt-5">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>{{$settings->city}}</h3>
                                <p>{{$settings->address}}</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>{{$settings->phone}}</h3>
                                <p>{{$settings->work_hours}}</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>{{$settings->email}}</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
	 


            </div>

        </section>
    <!-- ================ contact section end ================= -->
    

@endsection