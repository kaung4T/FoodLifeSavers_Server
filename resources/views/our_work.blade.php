@extends('main_master2')

@section('content')


<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2 class="text-start">Our Work</h2>
                <ul>
                    <li> <a href="{{ route('index') }}"><i class="bi bi-house-door"></i> Home</a></li>
                    <li><i class="bi bi-chevron-double-right pe-2"></i> Our Work</li>
                </ul>
            </div>
        </div>
    </div>
       
       
    <section class="container-fluid causes bg-gray">
        <div class="container">
            <div class="section-title row">


            <div class="container py-5" style="margin-top: -130px;">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Donation Plans</h5>
                <h3 class="mb-0"> We are Offering Competitive Plans for Other Lives </h3>
            </div>
            <div class="row g-0">
                        
                            @foreach ($donation as $each_donation)

                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">{{ $each_donation->plan_type }}</h4>
                            <small class="text-uppercase">{{ $each_donation->plan_info }}</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                @if ($each_donation->discount)
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>{{ $each_donation->discount }}.00<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                @else
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>{{ $each_donation->amount }}.00<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                <br>
                                <small class="text-uppercase" style="font-size: 15px;color: #9c9c9c;">Discount not available</small>
                                @endif

                                @if ($each_donation->discount)
                                <br>
                                <small class="" style="font-size: 20px; position: relative; bottom: 3px; text-decoration: line-through;">$</small><label style="font-size: 28px; text-decoration: line-through;">{{ $each_donation->amount }}.00</label><small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                @endif
                            </h1>
                            
                                @if ($each_donation->plan_type == "Daily Plan")
                            <div class="d-flex justify-content-between mb-3"><span> Person-1 &amp; Person-2 </span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span> Person-2 &amp; Person-3 </span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-2 &amp; Person-3</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Person-2 &amp; Person-3</span><i class="fa fa-times text-danger pt-1"></i></div>
                                @elseif ($each_donation->plan_type == "Monthly Plan")
                            <div class="d-flex justify-content-between mb-3"><span>Person-1 &amp; Person-2</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-2 &amp; Person-3</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Person-3 &amp; Person-4</span><i class="fa fa-times text-danger pt-1"></i></div>
                                @elseif ($each_donation->plan_type == "Advanced Plan")
                            <div class="d-flex justify-content-between mb-3"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                                @endif

                            <a href="{{ route('single_donate', $each_donation->id) }}" class="btn btn-primary py-2 px-4 mt-4">Donate Now</a>
                        </div>
                    </div>
                </div>

                        @endforeach
                
            </div>
        </div>




        </div>
        </div>
     </section> 
        



     <div class="what-we-do big-padding container-fluid" style="margin-top: -110px;">
           <div class="container">
               <div class="section-title row">
                   <h2>What we do?</h2>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac accumsan ante. Proin ac lectus porttitor, pharetra lorem sit amet, euismod tortor. Donec blandit accumsan elit</p>
               </div>
               <div class="row mt-4 whd">
                   <div class="col-md-4 text-center mb-5">
                       <i class="bi text-primary fs-1 bi-egg-fried"></i>
                       <h4 class="fs-6 fw-bold mt-3">RAISE FUND FOR HEALTHY FOOD</h4>
                       <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla  consectetur adipiscing elit. Sed ac accumsan hic deserunt facere et animi</p>
                   </div>
                    <div class="col-md-4 text-center mb-5">
                       <i class="bi fs-1 text-primary bi-house-door"></i>
                       <h4 class="fs-6 fw-bold mt-3">HUGE HELP TO HOMELESS PUPIL</h4>
                       <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla  consectetur adipiscing elit. Sed ac accumsan hic deserunt facere et animi</p>
                   </div>
                    <div class="col-md-4 text-center mb-5">
                      <i class="bi fs-1 text-primary bi-book-half"></i>
                       <h4 class="fs-6 fw-bold mt-3">EDUCATION FOR POOR CHILDREN</h4>
                       <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla  consectetur adipiscing elit. Sed ac accumsan hic deserunt facere et animi</p>
                   </div>
                     <div class="col-md-4 text-center mb-5">
                      <i class="bi fs-1 text-primary bi-currency-dollar"></i>
                       <h4 class="fs-6 fw-bold mt-3">MASSIVE DONATION TO POOR</h4>
                       <p>Lorem ipsum dolor sit amet consectetur,  consectetur adipiscing elit. Sed ac accumsan adipisicing elit. Nulla hic deserunt facere et animi</p>
                   </div>
                    <div class="col-md-4 text-center mb-5">
                       <i class="bi fs-1 text-primary bi-building"></i>
                       <h4 class="fs-6 fw-bold mt-3">LET’S BUILD SOME HOMES</h4>
                       <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla  consectetur adipiscing elit. Sed ac accumsan hic deserunt facere et animi</p>
                   </div>
                     <div class="col-md-4 text-center mb-5">
                       <i class="bi fs-1 text-primary bi-heart-pulse"></i>
                       <h4 class="fs-6 fw-bold mt-3">MEDICAL FACILITIES</h4>
                       <p>Lorem ipsum dolor sit amet consectetur,  consectetur adipiscing elit. Sed ac accumsan adipisicing elit. Nulla hic deserunt facere et animi</p>
                   </div>
                   
                  
               </div>
           </div>
       </div>

    
    </body>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>


@endsection
