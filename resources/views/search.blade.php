@extends('main_master2')

@section('content')


<div class="search_body">
<h3>Your search: <b>{{ $search }}</b></h3>
<span>Result: @if ($nothing !== null) {{ $nothing }} @else {{ $item_count }} @endif</span>

<div class="search_body_result">


@if ($donation == "[]" and $service == "[]")
<div class="container py-5"></div>
@endif


            @if ($donation != "[]")
            <div class="container py-3">
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
        @endif



        @if ($service != "[]")
        <div class="container-xxl bg-light py-3 my-3">
        <div class="container py-3">
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
    @endif






</div>

</div>


@endsection

