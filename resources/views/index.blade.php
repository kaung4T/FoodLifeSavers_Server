@extends('main_master')

@section('content')


<video class="web_image_cover" autoplay="autoplay" loop muted >
  <source src="assets/ui/img/header_cover4.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

<div class="web_text_cover">
<h1>Give free one donate for all of humanity</h2>
<a href="{{ route('our_work') }}" class="btn btn-sm btn-outline-dark index_home_button">Learn about Food Life Savers</a>
</div>


@if(Session::has('success'))
    <div class="alert alert-success user_sign_up_message">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <div><strong>Success!</strong> {{ Session::get('message', '') }}</div>
        </div>
@endif
    

    <!-- JS apex Chart install -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

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
                    <a href="{{ route('our_work') }}" class="btn btn-primary btn-sm py-2 px-2 animated slideInDown mt-3">DONATE NOW</a>
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
                        <a class="btn btn-primary py-2 px-3" href="{{ route('about') }}"> Read More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-xxl bg-light py-5 my-5 donation_div">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid mb-4 rounded-5" src="{{asset('assets/ui/img/hero-2.png')}}" alt="">
                    <h1 class="display-4" id="today_donation_num"> 18 </h1>
                    <p class="fs-5 text-primary mb-0"> Today Donations </p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid mb-4 rounded-5" src="{{asset('assets/ui/img/icon-1.png')}}" alt="">
                    <h1 class="display-4" id="month_donation_num"> 810 </h1>
                    <p class="fs-5 text-primary mb-0"> Monthly Donations </p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid mb-4 rounded-5" src="{{asset('assets/ui/img/total_donation.png')}}" alt="">
                    <h1 class="display-4" id="total_donation_num"> 1200 </h1>
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
                    @foreach ($service as $each_service)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-white p-5">
                            <div class="text-center">
                                <img class="img-fluid mb-4" src="{{ asset('storage/app/public/'.$each_service->file_path) }}" alt="">
                            <h5 class="mb-3 text-primary"> {{ $each_service->name }} </h5>
                            </div>
                            
                            <p class="short_description"> {{ $each_service->text }} </p>
                            <a href="{{ route('each_service', $each_service->id) }}" class="btn btn-primary btn-sm float-end"> Read More <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    @endforeach
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

            <div class="mx-auto display_budget">
                    <div class="display_budget_text"><b>RM7,000</b> of RM10,000 raised</div>
                    <div class="display_budget_bar"></div>
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

                        <div class="dhms_due">Due in</div>

                            <div class="dhms">
                                <h1 id="days" class="mb-0 gaza-count-down"></h1>
                                <span class="text-primary gaza-count-down-span">Days </span>
                            </div>
                            <div class="dhms">
                                <h1 id="hours" class="mb-0 gaza-count-down"></h1>
                                <span class="text-primary gaza-count-down-span">Hours </span>
                            </div>
                            <div class="dhms">
                                <h1 id="minutes" class="mb-0 gaza-count-down"></h1>
                                <span class="text-primary gaza-count-down-span">Minutes </span>
                            </div>
                            <div class="dhms">
                                <h1 id="seconds" class="mb-0 gaza-count-down"></h1>
                                <span class="text-primary gaza-count-down-span">Seconds </span>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="col-12 text-center py-4">
                    <a class="btn btn-primary py-3 px-4" href="{{ route('our_work') }}"> Donate Now </a>
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

 {{-- =================End of Main Content --}}

 <script>

    let backend_year = <?php echo json_encode($year); ?>;
    let backend_month = <?php echo json_encode($month); ?>;
    let backend_day = <?php echo json_encode($day); ?>;

    const today = new Date();
    let today_day = today.getDate();

    // Please write your specific end date in endDate
        // let endDate = "10"; 
    // end
    // let specialDate = `February ${endDate} 2024 00:00:00`;

    let specialDate = `${backend_month} ${backend_day} ${backend_year} 00:00:00`;

    const days = document.querySelector("#days");
    const hours = document.querySelector("#hours");
    const minutes = document.querySelector("#minutes");
    const seconds = document.querySelector("#seconds");

    const second = 1000;
    const minute = second * 60;
    const hour = minute * 60;
    const day = hour * 24;

    const birthdayTime = new Date(specialDate);

    const setTime = () => {
    const currentTime = new Date;
    let specialTime = birthdayTime.getTime() - currentTime.getTime();
    const specialHour = Math.floor((specialTime % day) / hour);
    const specialMinute = Math.floor((specialTime % hour) / minute);
    const specialSecond = Math.floor((specialTime % minute) / second);

        
        const countDownDate = new Date(specialDate).getTime();
        const now = new Date().getTime();
        const timeleft = countDownDate - now;
        const letf_days = Math.floor(timeleft / (1000 * 60 * 60 * 24));

        days.innerText = letf_days;



    hours.innerText = specialHour;
    minutes.innerText = specialMinute;
    seconds.innerText = specialSecond;

    console.log(specialTime);
    };

    setInterval(setTime, 1000);



 </script>
 
	
    <!-- <script src="{{asset('assets/ui/js/gaza_count.js')}}"></script> -->
    <script src="{{asset('assets/ui/js/page_motion.js')}}"></script>
    <script src="{{asset('assets/ui/js/number_count.js')}}"></script>
    <script src="{{asset('assets/ui/js/budget_bar.js')}}"></script>

@endsection
