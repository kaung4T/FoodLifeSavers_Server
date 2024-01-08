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
          <p class="home-price"><em>${{ $donation->amount }}.00 </em>/ Month</p>
          <label class="text-uppercase left_plan_info">{{ $donation->plan_info }} </label>
          <hr class="left-hr" />
          <div class="p-6 pt-0">
                            <h5 class="display-5 mb-3" style="font-size: 2.2rem;">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>{{ $donation->amount }}.00<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h5>
                            @if ($donation->plan_type == "Daily Plan")
                            <div class="d-flex justify-content-between mb-3"><span> Person-1 &amp; Person-2 </span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span> Person-2 &amp; Person-3 </span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-2 &amp; Person-3</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Person-2 &amp; Person-3</span><i class="fa fa-times text-danger pt-1"></i></div>
                                @elseif ($donation->plan_type == "Monthly Plan")
                            <div class="d-flex justify-content-between mb-3"><span>Person-1 &amp; Person-2</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-2 &amp; Person-3</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Person-3 &amp; Person-4</span><i class="fa fa-times text-danger pt-1"></i></div>
                                @elseif ($donation->plan_type == "Advanced Plan")
                            <div class="d-flex justify-content-between mb-3"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
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
                <td class="price">{{ $donation->amount }}.00 USD</td>
              </tr>
              <tr>
                <td>Discount</td>
                <td class="price">0.00 USD</td>
              </tr>
              <tr>
                <td>Subtotal</td>
                <td class="price">{{ $donation->amount }}.00 USD</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td class="price">0.00 USD</td>
              </tr>
              <tr class="total">
                <td>Total</td>
                <td class="price">{{ $donation->amount }}.00 USD</td>
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
                id="full-name"
                name="full-name"
                placeholder="Satoshi Nakamoto"
                required
                type="text"
              />
            </div>

            <div>
              <label for="credit-card-num"
                >Card Number
                <span class="card-logos">
                  <i class="card-logo fa-brands fa-cc-visa"></i>
                  <i class="card-logo fa-brands fa-cc-amex"></i>
                  <i class="card-logo fa-brands fa-cc-mastercard"></i>
                  <i class="card-logo fa-brands fa-cc-discover"></i> </span
              ></label>
              <input
                id="credit-card-num"
                name="credit-card-num"
                placeholder="1111-2222-3333-4444"
                required
                type="text"
              />
            </div>

            <div>
              <p class="expires">Expires on:</p>
              <div class="card-experation">
                <label for="expiration-month">Month</label>
                <select id="expiration-month" name="expiration-month" required>
                  <option value="">Month:</option>
                  <option value="">January</option>
                  <option value="">February</option>
                  <option value="">March</option>
                  <option value="">April</option>
                  <option value="">May</option>
                  <option value="">June</option>
                  <option value="">July</option>
                  <option value="">August</option>
                  <option value="">September</option>
                  <option value="">October</option>
                  <option value="">November</option>
                  <option value="">Decemeber</option>
                </select>

                <label class="expiration-year">Year</label>
                <select id="experation-year" name="experation-year" required>
                  <option value="">Year</option>
                  <option value="">2023</option>
                  <option value="">2024</option>
                  <option value="">2025</option>
                  <option value="">2026</option>
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
