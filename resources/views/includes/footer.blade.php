<!-- Footer Start -->
<div class="container-fluid bg-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
<div class="container py-5">
    <div class="row g-5">
        <div class="col-md-6">
            <h1 class="text-primary mb-4">
                <img class="img-fluid me-2" src="{{asset('page/img/icon-1.png')}}" alt=""
                    style="width: 45px;"> FoodLiveSavers </h1>
            <span>
                <p>
                FoodLifeSavers is dedicated to providing essential sustenance and medical aid to those in need. 
                Join our humanitarian mission, where every meal and medical supply brings hope and nourishment, making a meaningful impact on lives around the world.
                </p>
            </span>
        </div>
        <div class="col-md-6">
            <h5 class="mb-4"> Newsletter </h5>
            <p>
               Subscribe to our newsletter and witness the power of compassion in action. Stay updated on our latest humanitarian efforts, bringing hope, aid, and positive change to those in need. Join us in making a difference today.
            </p>
            <div class="position-relative">

                <form action="{{ route('email_subscribe') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <input type="text" class="form-control ps-4 pe-5 emailSignup" 
                    placeholder="Your email">
    <button type="submit" class="btn btn-primary btn-sm py-2 px-3 position-absolute top-0 end-0 me-2 emailSignupBtn"> SignUp </button>
                </form>

            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <h5 class="mb-4">Get In Touch</h5>
            <p><i class="fa fa-map-marker-alt me-3"></i> Myanmar </p>
            <p><i class="fa fa-phone-alt me-3"></i> +959 12345678</p>
            <p><i class="fa fa-envelope me-3"></i>info@evpower.eco</p>
        </div>
        <div class="col-lg-3 col-md-6">
            <h5 class="mb-4">Our Services</h5>
            <a class="btn btn-link" href="">Currency Wallet</a>
            <a class="btn btn-link" href="">Currency Transaction</a>
            <a class="btn btn-link" href="">Bitcoin Investment</a>
            <a class="btn btn-link" href="">Token Sale</a>
        </div>
        <div class="col-lg-3 col-md-6">
            <h5 class="mb-4">Quick Links</h5>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
            <a class="btn btn-link" href="">Our Services</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
        </div>
        <div class="col-lg-3 col-md-6">
            <h5 class="mb-4">Follow Us</h5>
            <div class="d-flex">
                <a class="btn btn-square rounded-circle me-1" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square rounded-circle me-1" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-circle me-1" href="#"><i class="fab fa-youtube"></i></a>
                <a class="btn btn-square rounded-circle me-1" href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a href="#"> EV Power Co., Ltd. </a>, All Right Reserved!
            </div>
            <div class="col-md-6 text-center text-md-end">
                Developed By <a href="#"> EV Power Group </a> Distributed By <a
                    href="https:www.evpower.eco"> EV-Power </a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Footer End -->