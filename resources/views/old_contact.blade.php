@extends('main_master')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

@section('content')

  
  <div class="contactForm mx-2">
      <div class="row">
          <div class="col-md-12">
      <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
</div>
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="{{asset('assets/ui/img/contact-1.jpg')}}" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>First slide label</h5>
      <p>Some representative placeholder content for the first slide.</p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="{{asset('assets/ui/img/contact-2.jpg')}}" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Second slide label</h5>
      <p>Some representative placeholder content for the second slide.</p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="{{asset('assets/ui/img/contact-3.jpg')}}" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5 class="text-primary">Stock Exchange App</h5>
      <p class="text-primary"> If the users / customers want to login in this system, the users must be register in stock exchnge app first.</p>
    </div>
  </div>
    <div class="carousel-item">
    <img src="{{asset('assets/ui/img/contact-4.png')}}" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Fourth slide label</h5>
      <p>Some representative placeholder content for the third slide.</p>
    </div>
  </div>

   <div class="carousel-item">
    <img src="{{asset('assets/ui/img/contact-5.png')}}" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Fixth slide label</h5>
      <p>Some representative placeholder content for the third slide.</p>
    </div>
  </div>

</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>

      </div>
  </div>
</div>
      
      <div class="container-fluid p-3">
          
          <div class="row">
              <div class="col-md-12">
                
      <section class="contact-page-sec">
            <h3 class="contactHeading"> Contact Us </h3>
                  
            <h4 class="text-primary"> How Can We Help You? </h4>
                  <p>
                      To request a free quote for any of our services, a free consultation session, or to discuss any of your individual requirements, please fill out the form below and a member of the team will contact you within four hours.
                              
                      We will provide free consultation for your business based on our expertise and experiences.
                  </p>

    <div class="row">
      <div class="col-md-4">
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-map-marked"></i>
            </div>
            <div class="contact-info-text">
              <h2>Address</h2>
              <span>No.32, Kamaryut Township </span> 
              <span>Yangon-Myanmar</span> 
            </div>
          </div>            
        </div>          
      </div>          
      <div class="col-md-4">
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="contact-info-text">
              <h2>E-mail</h2>
              <span>director@evpower.eco</span> 
              <span>info@evpower.eco</span>
            </div>
          </div>            
        </div>                
      </div>                
      <div class="col-md-4">
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-clock"></i>
            </div>
            <div class="contact-info-text">
              <h2>office time</h2>
              <span>Mon - Fri  8:00 am - 5.00 pm</span>
              <span>Sat - Sun  10.00 pm - 9.00 pm</span>
            </div>
          </div>            
        </div>          
      </div>          
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="contact-page-form" method="post">
          <h2>Get in touch with us</h2> 
          <form action="#" method="POST">
            <div class="row">
              
            <div class="col-md-6 col-xs-12">
              <div class="single-input-field">
                <input type="text" class="form-control border bordered-1" placeholder="Your Name *" name="name"/>
              </div>
            </div>  

            <div class="col-md-6 col-xs-12">
              <div class="single-input-field">
                <input type="email" class="form-control border bordered-1" placeholder="E-mail *" name="email" required/>
              </div>
            </div>        

            <div class="col-md-6 col-xs-12">
              <div class="single-input-field">
                <input type="text" class="form-control border bordered-1" placeholder="Phone Number *" name="number"/>
              </div>
            </div>  
            
            <div class="col-md-6 col-xs-12">
              <div class="single-input-field">
                <input type="text" class="form-control border bordered-1" placeholder="Business Name *" name="business_name"/>
              </div>
            </div>  

              <div class="col-md-6 col-xs-12">
              <div class="single-input-field">
                <input type="text" class="form-control border bordered-1" placeholder="Type of Industry *" name="business_name"/>
              </div>
            </div> 

              <div class="col-md-6 col-xs-12">
              <div class="single-input-field">
                <input type="text" class="form-control border bordered-1" placeholder="Estimate Budget *" name="business_name"/>
              </div>
            </div> 

              <div class="col-md-6 col-xs-12 mb-3">                       
                      <select name="country" id="countries" onchange="loadCountries()">
                      <option selected="selected" class="selectCountry" value="{{old('country')}}"> Select Your Country </option>
                      <option value="">1</option>
                      <option value="">2</option>
                      <option value="">3</option>
                      <option value="">4</option>
                      </select>
            </div>  
            
              <div class="col-md-6 col-xs-12 mb-3">               
                      <select name="subject" id="subject">
                      <option selected="selected" value="{{old('subject')}}"> Select Your Subject </option>
                      <option value="">Crypto</option>
                      <option value="">Trading</option>
                      <option value="">Payment</option>
                      <option value="">Investments</option>
                      </select>
            </div>  

                      
            <div class="col-md-6 message-input">
              <div class="single-input-field">
                <textarea  placeholder="Project Brief *" name="message"></textarea>
                
              </div>
            </div>                                                
            <div class="single-input-fieldsbtn">
              <input type="submit" value="Send Now"/>
            </div>                          
          </div>
          </form>   
        </div>      
      </div>

      <div class="col-md-6">        
        <div class="contact-page-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109741.02912911311!2d76.69348873658222!3d30.73506264436677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be66ec96b%3A0xa5ff67f9527319fe!2sChandigarh!5e0!3m2!1sen!2sin!4v1553497921355" width="100%" height="530" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>          
      </div>        
    </div>
  
</section>
              </div>
          </div>
      </div>

  
@endsection