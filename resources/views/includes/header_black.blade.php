
<!-- <nav class="navbar navbar-expand-lg fixed-top p-0 px-4 px-lg-5" style="background-image: url('assets/ui/img/header_cover.gif');"> -->
<!-- <nav class="navbar navbar-expand-lg " style="background-image: url('assets/ui/img/header_cover3.gif'); -->
<nav class="navbar navbar-expand-lg";
                >
        <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 text-primary">
                <img class="img-fluid me-2 rounded-5 header_img" src="{{asset('assets/ui/img/foodlifesavers LOGO v2.png')}}" alt=""></h2>
        </a>
        <button type="button" class="navbar-toggler" id="nav_header_setting" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon">
            <i class="fas fa-bars text-dark"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse responsive_header_nav" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0 responsive_header_nav_second">
                 <a href="{{url('/')}}" class="nav-link text-dark">Home</a>

                <div class="nav-item dropdown">
                    <a href="{{ route('our_work') }}" class="nav-link text-dark">Our Work</a>
                </div>

                <div class="nav-item dropdown">
                    <a href="{{ route('about') }}" class="nav-link text-dark">About Us</a>
                </div>

                <div class="nav-item dropdown">
                    <a href="{{ route('contact') }}" class="nav-link text-dark">Contact</a>
                </div>
             
            </div>
            <!-- <div class="h-100 d-lg-inline-flex align-items-center d-block"> -->
            <div class="d-block mobile_header_donate">
                <!-- <a type="button" class="btn btn-primary btn-sm text-light me-2 responsive_header_nav" href="{{route('login')}}">DONATE</a> -->
                <a type="button" class="btn btn-primary btn-sm text-light me-2" href="{{route('login')}}">Donate</a>
            </div>

             <div class="googleNav">
                    <div class="goog-te-gadget" id="google_translate_element">
                </div>
                </div>

                <div class="header-icons">

                <label class="mobile-hide search-bar-icon" id="search_pop"><i
                    class="fas fa-search text-dark"></i></label>
                    </div>

                   <div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
                            <form action="{{ route('search') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h3>Search For:</h3>
                                <input type="text" name="search" placeholder="Keywords">
                                <button type="submit">Search <i class="fas fa-search"></i></button>
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
        </div>
    </nav>

    <script src="{{asset('assets/ui/js/nav_header_setting.js')}}"></script>
    <script src="{{asset('assets/ui/js/search.js')}}"></script>
    <script src="{{asset('assets/ui/js/header_active.js')}}"></script>

