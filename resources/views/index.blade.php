@extends('main_master')

@section('content')

@if(Session::has('success'))
    <div class="alert alert-success user_sign_up_message">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <div><strong>Success!</strong> {{ Session::get('message', '') }}</div>
    </div>
@endif
	
<!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5 index_header">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">Make Better Life With Your Donation Now </h1>
                    <p class="animated slideInDown">
                       In Gaza, there are severe shortages of water, food, fuel, and medical supplies. FoodLifeSaver is urgently organizing aid to Gaza to support Palestine Refugees in need.
                        Just one week ago, FoodLifeSaver delivered a truck carrying 45,000 water bottles to Gaza. Your donation to the FoodLifeSaver's Charity Fund directly supports these important humanitarian relief efforts.
                    </p>
                    <a href="#" class="btn btn-primary btn-sm py-2 px-2 animated slideInDown">DONATE NOW</a>
                </div>
                <div class="col-lg-6 animated fadeIn">  
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="{{asset('assets/ui/img/hero-1.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{asset('assets/ui/img/about.png')}}" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">About Us</h1>
                        <p class="text-primary fs-5 mb-4"> One Small Step to Make Big Changes </p>
                        <p> 
                            Every donation you make contributes to the improvement of Palestinian Lives.
                        </p>
                        <p class="mb-4"> 
                            We're offering our help with everything we can to provide the daily needs of refugees. </p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span> Provide essential food support to refugees in need. </span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span> Offer medical assistance and care to refugees facing health challenges. </span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span> Collaborate with organizations to ensure comprehensive aid for refugees in both food and medical domains. </span>
                        </div>
                        <a class="btn btn-primary py-2 px-3" href=""> Read More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid mb-4 rounded-5" src="{{asset('assets/ui/img/hero-2.png')}}" alt="">
                    <h1 class="display-4"> 18 </h1>
                    <p class="fs-5 text-primary mb-0"> Today Donations </p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid mb-4 rounded-5" src="{{asset('assets/ui/img/icon-1.png')}}" alt="">
                    <h1 class="display-4"> 810 </h1>
                    <p class="fs-5 text-primary mb-0"> Monthly Donations </p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid mb-4 rounded-5" src="{{asset('assets/ui/img/total_donation.png')}}" alt="">
                    <h1 class="display-4"> 1200 </h1>
                    <p class="fs-5 text-primary mb-0"> Total Donations </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Why Us!</h1>
                <p class="text-primary fs-5 mb-5"> Why Should You Donate? </p>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="{{asset('assets/ui/img/icon-7.png')}}" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3 text-primary"> Lifesaving Impact </h5>
                            <span>
                                <p>
                                    Your donations directly save lives and ease the suffering of Gaza refugees facing critical shortages.
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0 rounded-5" src="{{asset('assets/ui/img/icon-6.png')}}" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3 text-primary"> Immediate Relief </h5>
                            <span> 
                                <p>
                                    The urgent situation in Gaza demands swift action, and your charity provides timely assistance to those in need.
                                </p>    
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0 rounded-5" src="{{asset('assets/ui/img/icon-5.png')}}" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3 text-primary"> Comprehensive Assistance </h5>
                            <span>
                                <p>
                                    Addressing multiple aspects of the crisis, including food and medical aid, ensures a well-rounded impact from donor contributions.
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0 rounded-2" src="{{asset('assets/ui/img/icon-4.png')}}" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3 text-primary"> Transparent Accountability </h5>
                            <span>
                                <p>
                                    Regular updates on fund utilization build trust, demonstrating a commitment to transparency and accountability.
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0 rounded-5" src="{{asset('assets/ui/img/icon-3.png')}}" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3 text-primary"> Sustainable Solutions </h5>
                            <span> 
                               <p>
                                    Beyond immediate relief, your charity focuses on long-term development projects for lasting impact and stability.
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0 rounded-5" src="{{asset('assets/ui/img/icon-8.png')}}" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3 text-primary"> Global Support </h5>
                            <span> 
                                <p>
                                    Donors become part of a global effort, contributing to the collective responsibility of the international community in supporting Gaza's affected populations.
                                </p>    
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Services</h1>
                <p class="text-primary fs-5 mb-5"> Crisis News and Latest Updates </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5">
                        <div class="text-center">
                            <img class="img-fluid mb-4 rounded-5" src="{{asset('assets/ui/img/icon-9.png')}}" alt="">
                        <h5 class="mb-3 text-primary"> Gaza's Toll </h5>
                        </div>
                        
                        <p class="short_description"> Gaza faced devastating strikes, with 10,800 reported deaths, 26,000 injuries, and 1.5 million displaced, creating a dire humanitarian situation. </p>
                        <a href="#" class="btn btn-primary btn-sm float-end"> Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-5">
                        <div class="text-center">
                            <img class="img-fluid mb-4 rounded-5" src="{{asset('assets/ui/img/icon-10.png')}}" alt="">
                        <h5 class="mb-3 text-primary"> Global Impact </h5>
                        </div>
                        
                        <p class="short_description"> Protests worldwide demand a ceasefire, emphasizing the urgent need for international support to address the escalating crisis.
                        </p>
                        <a href="" class="btn btn-primary btn-sm float-end"> Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5">
                      <div class="text-center">
                          <img class="img-fluid mb-4 rounded-5" src="{{asset('assets/ui/img/icon-2.png')}}" alt="">
                        <h5 class="mb-3 text-primary"> International Response - I </h5>
                      </div>
                        <p class="short_description"> 
                           Despite international calls, the conflict continues, prompting Israel to implement four-hour pauses in fighting in specific areas of 
                            northern Gaza.
                        </p>
                        <a href="" class="btn btn-primary btn-sm float-end"> Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                  
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5">
                        <div class="text-center">
                             <img class="img-fluid mb-4 rounded-5" src="{{asset('assets/ui/img/icon-2.png')}}" alt="">
                        <h5 class="mb-3 text-primary"> International Response - II </h5>
                        </div>
                       
                        <p class="short_description"> 
                           to facilitate humanitarian aid delivery Despite international calls, the conflict continues, prompting Israel to implement four-hour pauses in fighting in specific areas of 
                            northern Gaza to facilitate humanitarian aid delivery.
                        </p>
                        <a href="" class="btn btn-primary btn-sm float-end"> Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Roadmap Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6"> Roadmap </h1>
                <p class="text-primary fs-5 mb-5"> We Can Transform Your Support into Life-Saving Work </p>
            </div>
            <div class="roadmap-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5> October 2023 </h5>
                    <span> Initiate urgent humanitarian aid delivery and emergency response efforts for Gaza refugees. </span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5> November 2023 </h5>
                    <span> Establish and maintain a humanitarian corridor, focusing on medical assistance and essential supplies. </span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5> December 2023 </h5>
                <span> Address winter preparedness through the distribution of warmth-related aid and infrastructure rehabilitation.  </span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5> January 2023 </h5>
                    <span> Shift to sustainable development, prioritize long-term solutions, and actively seek ongoing international support. </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Roadmap End -->

    <!-- Token Sale Start -->
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <!-- <div class="text-center mx-auto wow fadeInUp motion_item_top" data-wow-delay="0.1s" style="max-width: 500px;"> -->
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Gaza Winter Aid</h1>
                <p class="text-primary fs-5 mb-5">Winter Supply Countdown</p>
            </div>

            <!-- Default setup with row and col -->
            <!-- <div class="row g-3 justify-content-center">
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.1s"> -->
            <div class="justify-content-center">
                <div class="wow fadeIn motion_item_top" data-wow-delay="0.1s">
                    <div class="bg-white text-center p-3 gaza-div-group">

                        <!-- <h1 class="mb-0 gaza-count-down">60</h1> -->
                        <!-- <span class="text-primary fs-5">Days</span> -->

                        <div id="gaza-date-time-group">
                            <div class="dhms">
                                <h1 id="days" class="mb-0 gaza-count-down"></h1>
                                <span class="text-primary fs-5 gaza-count-down">Days </span>
                            </div>
                            <div class="dhms">
                                <h1 id="hours" class="mb-0 gaza-count-down"></h1>
                                <span class="text-primary fs-5 gaza-count-down">Hours </span>
                            </div>
                            <div class="dhms">
                                <h1 id="minutes" class="mb-0 gaza-count-down"></h1>
                                <span class="text-primary fs-5 gaza-count-down">Minutes </span>
                            </div>
                            <div class="dhms">
                                <h1 id="seconds" class="mb-0 gaza-count-down"></h1>
                                <span class="text-primary fs-5 gaza-count-down">Seconds </span>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="col-12 text-center py-4">
                    <a class="btn btn-primary py-3 px-4" href=""> Donate Now </a>
                </div>
                <div class="col-12 text-center">
                    <img class="img-fluid m-1" src="{{asset('assets/ui/img/payment-1.png')}}" alt="" style="width: 50px;">
                    <img class="img-fluid m-1" src="{{asset('assets/ui/img/payment-2.png')}}" alt="" style="width: 50px;">
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Token Sale Start -->

    <!-- FAQs Start -->
 {{--================== Main Content ==================  --}}

	<div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Donation Plans</h5>
                <h3 class="mb-0"> We are Offering Competitive Plans for Other Lives </h3>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Daily Plan</h4>
                            <small class="text-uppercase">For Small Plan Amount </small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>20.00<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span> Person-1 &amp; Person-2 </span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span> Person-2 &amp; Person-3 </span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-2 &amp; Person-3</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Person-2 &amp; Person-3</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Donate Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Monthly Plan</h4>
                            <small class="text-uppercase">For Medium Plan Amount</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>400.00<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Person-1 &amp; Person-2</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-2 &amp; Person-3</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Person-3 &amp; Person-4</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Donate Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: slideInUp;">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Advanced Plan</h4>
                            <small class="text-uppercase">For Large Plan Amount</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>800.00<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 {{-- =================End of Main Content --}}
	
    <script src="{{asset('assets/ui/js/gaza_count.js')}}"></script>
    <script src="{{asset('assets/ui/js/page_motion.js')}}"></script>

@endsection
