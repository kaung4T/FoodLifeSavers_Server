


@extends('main_master2')

@section('content')



<div class="payment_complete">


<div class="base_content4">
        <div class="main_order_body">
          <div class="order_body">
    
                    <div class="order_header">
                            <div class="mb-2">
                                <h3>Your Donate Successfully Placed</h3>
                            </div>
                                <div class="form-text">Thanks for chosing Food Life Saver!</div>
                                <h2><i class="bi bi-check-circle"></i></h2>
                    </div>



                    <div class="order_text_group">
                        <div class="order_left">
                            <div class="order_user">
                                <h4>User Detail</h4>
                                <ul>

                                    <li><label class="order_user_info" for="">Order Id: </label> {{ $order->order_id }} </li>
                                    <li><label class="order_user_info" for="">Name: </label> {{ $user }} </li>
                                    <li><label class="order_user_info" for="">Phone: </label> {{ $phone }} </li>
                                    <li><label class="order_user_info" for="">Email: </label> {{ $email }} </li>
                                    <li><label class="order_user_info" for="">Country: </label> {{ $country }} </li>
                                    <li><label class="order_user_info" for="">Address: </label> {{ $address }} </li>

                                </ul>
                            </div>


                            <div class="order_item">
                                <h4>Item Detail</h4>
                                <ul>
                <li><label class="order_item_info" for="">Item Types: </label> {{ $order->payment_plan }}  </li>
                <li><label class="order_item_info" for="">Total Amount: </label> {{ $order->payment_amount }}  </li>
                <li><label class="order_item_info" for="">Discount: </label> {{ $order->payment_discount }}  </li>
                <li><label class="order_item_info" for="">Item Info: </label> {{ $donate_plan->plan_info }} </li>
                                </ul>
                            </div>
                        </div>



                        <div class="order_right">
                            <h4>Items List</h4>

                            <div class="order_right_items_group">

                                
                                <div class="order_right_items">
                                <div class="wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
                    <div class="bg-light ">
                        <div class="border-bottom">
                            <h4 class="text-primary">{{ $order->payment_plan }}</h4>
                            <small class="text-uppercase">{{ $donate_plan->plan_info }}</small>
                        </div>
                        <div class="">
                            <h1 class="mb-3">
                                @if ($order->payment_discount)
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>{{ $order->payment_discount }}.00<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                @else
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>{{ $order->payment_amount }}.00<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                <br>
                                <small class="text-uppercase" style="font-size: 15px;color: #9c9c9c;">Discount not available</small>
                                @endif

                                @if ($order->payment_discount)
                                <br>
                                <small class="" style="font-size: 20px; position: relative; bottom: 3px; text-decoration: line-through;">$</small><label style="font-size: 28px; text-decoration: line-through;">{{ $order->payment_amount }}.00</label><small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                @endif
                            </h1>
                            
                                @if ($order->payment_plan == "Daily Plan")
                            <div class="d-flex justify-content-between mb-3"><span> Person-1 &amp; Person-2 </span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span> Person-2 &amp; Person-3 </span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-2 &amp; Person-3</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Person-2 &amp; Person-3</span><i class="fa fa-times text-danger pt-1"></i></div>
                                @elseif ($order->payment_plan == "Monthly Plan")
                            <div class="d-flex justify-content-between mb-3"><span>Person-1 &amp; Person-2</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-2 &amp; Person-3</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Person-3 &amp; Person-4</span><i class="fa fa-times text-danger pt-1"></i></div>
                                @elseif ($order->payment_plan == "Advanced Plan")
                            <div class="d-flex justify-content-between mb-3"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Person-3 &amp; Person-4</span><i class="fa fa-check text-primary pt-1"></i></div>
                                @endif

                            <a href="{{ route('single_donate', $order->id) }}" class="btn btn-primary py-2 px-4 mt-4">Donate Now</a>
                        </div>
                    </div>
                </div>
                                </div>
                                

                            </div>


                        </div>
                    </div>


        </div>
    </div>
</div>


</div>



@endsection


