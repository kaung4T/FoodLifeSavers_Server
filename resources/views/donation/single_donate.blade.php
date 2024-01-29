@extends('main_master2')

@section('content')
    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/bb515311f9.js"
      crossorigin="anonymous"
    ></script>

  <div class="check_out_body">
    <div class="checkout-container">

      <div class="left-side">
        <div class="text-box">
          <h3 class="home-heading">{{ $donation->plan_type }}</h3>
          @if ($donation->discount)
          <p class="home-price"><em>${{ $donation->discount }}.00 </em>/ Month</p>
          @else
          <p class="home-price"><em>${{ $donation->amount }}.00 </em>/ Month</p>
          @endif
          <label class="text-uppercase left_plan_info">{{ $donation->plan_info }} </label>
          <hr class="left-hr" />
          <div class="p-6 pt-0">
                            <h5 class="display-5 mb-3" style="font-size: 2.2rem;">
                              @if ($donation->discount)
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>{{ $donation->discount }}.00<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                              @else
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>{{ $donation->amount }}.00<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                              @endif
                              </h5>
                            @if ($donation->plan_type == "Daily Plan")
                            <div class="d-flex justify-content-between mb-3 check_out_des"><span> Person-1 &amp; Person-2 </span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3 check_out_des"><span> Person-2 &amp; Person-3 </span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3 check_out_des"><span>Person-2 &amp; Person-3</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2 check_out_des"><span>Person-2 &amp; Person-3</span><i class="fa fa-times text-danger pt-1"></i></div>
                                @elseif ($donation->plan_type == "Monthly Plan")
                            <div class="d-flex justify-content-between mb-3 check_out_des"><span>Person-1 &amp; Person-2</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3 check_out_des"><span>Person-2 &amp; Person-3</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3 check_out_des"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2 check_out_des"><span>Person-3 &amp; Person-4</span><i class="fa fa-times text-danger pt-1"></i></div>
                                @elseif ($donation->plan_type == "Advanced Plan")
                            <div class="d-flex justify-content-between mb-3 check_out_des"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3 check_out_des"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3 check_out_des"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2 check_out_des"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                                @endif
                        </div>
        </div>
      </div>

      <div class="right-side">
        <div class="receipt">
          <h2 class="receipt-heading">Receipt Summary</h2>
          <div>
            <table class="table">
              <tr>
                <td>Advanced Plan</td>
                @if ($donation->discount)
                <td class="price">{{ $donation->discount }}.00 USD</td>
                @else
                <td class="price">{{ $donation->amount }}.00 USD</td>
                @endif
              </tr>
              <tr>
                <td>Discount</td>
                @if ($donation->discount)
                <td class="price" style="text-decoration: line-through;">{{ $donation->amount }} USD</td>
                @else
                <td class="price">0.00 USD</td>
                @endif
              </tr>
              <tr>
                <td>Subtotal</td>
                @if ($donation->discount)
                <td class="price">{{ $donation->discount }}.00 USD</td>
                @else
                <td class="price">{{ $donation->amount }}.00 USD</td>
                @endif
              </tr>
              <tr>
                <td>Tax</td>
                <td class="price">0.00 USD</td>
              </tr>
              <tr class="total">
                <td>Total</td>
                @if ($donation->discount)
                <td class="price">{{ $donation->discount }}.00 USD</td>
                @else
                <td class="price">{{ $donation->amount }}.00 USD</td>
                @endif
              </tr>
            </table>
          </div>
        </div>

        <div class="payment-info">
          <h4 class="payment-heading">Payment Information</h4>
          <form action="{{ route('donate', $payment_plan_id) }}"
            class="form-box"
            enctype="multipart/form-data"
            method="POST"
          >
          @csrf
            <div>
              <label for="full-name">Full Name</label>
              <input
                id="full_name"
                name="full_name"
                placeholder="Satoshi Nakamoto"
                required
                type="text"
              />
            </div>

            <div>
              <label for="credit_card_num"
                >Card Number
                <span class="card-logos">
                  <i class="card-logo fa-brands fa-cc-visa"></i>
                  <i class="card-logo fa-brands fa-cc-amex"></i>
                  <i class="card-logo fa-brands fa-cc-mastercard"></i>
                  <i class="card-logo fa-brands fa-cc-discover"></i> </span
              ></label>
              <input
                id="credit_card_num"
                name="credit_card_num"
                placeholder="1111-2222-3333-4444"
                required
                type="text"
              />
            </div>

            <div>
              <label for="address"
                >Address
              </label>
            <input class="w-50"
                id="address"
                name="address"
                required
                type="text"
              />
            </div>
            
            <div>
              <label for="city"
                >City
              </label>
            <input class="w-50"
                id="city"
                name="city"
                required
                type="text"
              />
            </div>

            <div>
              <label for="zip"
                >ZIP Code
              </label>
            <input class="w-25"
                id="zip"
                name="zip"
                required
                type="text"
              />
            </div>

            <div>
              <p class="expires">Expires on:</p>
              <div class="card-experation">
                <label for="expiration">Month</label>
                <select id="expiration-month" name="expiration_month" required>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>

                <label class="expiration-year">Year</label>
                <select id="experation-year" name="experation_year" required>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                </select>
              </div>
            </div>

            <div>
              <label for="cvv">CVV/CVC</label>
              <input
                id="cvv"
                name="cvv"
                placeholder="415"
                type="text"
                required
              />
              <a class="cvv-info" href="#">What is CVV?</a>
            </div>

            <button class="btn2" type="submit">
                Check Out
            </button>
          </form>

          <p class="footer-text">
            Your credit card infomration is encrypted
          </p>
        </div>
      </div>


    </div>
  </div>
    
    @endsection
