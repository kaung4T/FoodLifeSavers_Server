@extends('main_master2')

@section('content')


<div class="about-us">
        <div class="container">
            <div class="session-title">
                <p>Help us to Achieve our Goal</p>
                <h2>About Our Savers</h2>
            </div>
            <div class="about-row row">
                <div class="col-md-8">
                    <div class="abut-detail">
                         <h4>One Small Step to Make Big Changes.</h4>

        <label class="mb-4"> 
            Every donation you make contributes to the improvement of Palestinian Lives. We're offering our help with everything we can to provide the daily needs of refugees.
    </label>
        
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

                    </div>
                   

                        
                    <div class="row diag-ro">

                    @foreach ($donate_plan as $each_donate)
                        <div class="about-diag">
                            <div class="icon"><i class="fas fa-arrow-right"></i></div>
                            <div class="tex">
                                    @if ($each_donate->discount)
                                <h5>${{ $each_donate->discount }}</h5>
                                    @else
                                <h5>${{ $each_donate->amount }}</h5>
                                    @endif
                                <p>{{ $each_donate->plan_info }}</p>
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div>
                <div class="col-md-4">
                    <img src="assets/ui/img/about_img.png" alt="">
                </div>
            </div>
        </div>
    </div>
      
      <div id="testimonial" class="service bg-gray container-fluid px-4 py-5">
                <div class="container">
                    
               
                 <div class="section-title row mb-3">
                    <h2 class="fw-bolder">Testimonial</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum sit nibh amet egestas tellus.</p>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-6 mb-4">
                       <div class="serv-cove shadow-md rounded bg-white p-3">
                            <div class="prf row mb-3">
                                <div class="col-3">
                                    <!-- <img class="rounded-pill" src="assets/ui/img/member-01.jpg" alt=""> -->
                                </div>
                                <div class="col-9 align-self-center">
                                    <h6 class="mb-0 fw-bolder">Vinoth Parkash</h6>
                                    <span>CEO Fabric Nation</span>
                                </div>
                            </div>
                            <div class="det text-center">
                                <p class="fs-7 fst-italic">Sed lectus ante, pharetra in lacus sed, efficitur luctus elit. Suspendisse commodo felis dictum, tempor tortor a, dapibus tellus. Nam ornare felis ut arcu tristique luctus. Curabitur </p>
                            </div>
                       </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                       <div class="serv-cove shadow-md rounded bg-white p-3">
                            <div class="prf row mb-3">
                                <div class="col-3">
                                    <!-- <img class="rounded-pill" src="assets/ui/img/member-03.jpg" alt=""> -->
                                </div>
                                <div class="col-9 align-self-center">
                                    <h6 class="mb-0 fw-bolder">Jackson Daniel</h6>
                                    <span>CEO Notitech</span>
                                </div>
                            </div>
                            <div class="det text-center">
                                <p class="fs-7 fst-italic">Sed lectus ante, pharetra in lacus sed, efficitur luctus elit. Suspendisse commodo felis dictum, tempor tortor a, dapibus tellus. Nam ornare felis ut arcu tristique luctus. Curabitur </p>
                            </div>
                       </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                       <div class="serv-cove shadow-md rounded bg-white p-3">
                            <div class="prf row mb-3">
                                <div class="col-3">
                                    <!-- <img class="rounded-pill" src="assets/ui/img/member-02.jpg" alt=""> -->
                                </div>
                                <div class="col-9 align-self-center">
                                    <h6 class="mb-0 fw-bolder">Praveen Thaney</h6>
                                    <span>Admin Vintech</span>
                                </div>
                            </div>
                            <div class="det text-center">
                                <p class="fs-7 fst-italic">Sed lectus ante, pharetra in lacus sed, efficitur luctus elit. Suspendisse commodo felis dictum, tempor tortor a, dapibus tellus. Nam ornare felis ut arcu tristique luctus. Curabitur </p>
                            </div>
                       </div>
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


