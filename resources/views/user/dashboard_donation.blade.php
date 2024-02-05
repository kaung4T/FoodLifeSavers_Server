

@extends('user.main_master')

@section('content')


<div class="container-fluid py-4">
        Your Donate Subscribe Lists <span class="text-success" style="font-size: 1.3rem;"><i class="bi bi-check-lg"></i></span>
    </div>


    <div class="card w-95">
    <div class="card-body">

    <div class="table-responsive plan_table">
    <!-- <table id="dataTableExample" class="table table-dark table-image mb-2"> -->
    <table id="" class="display table table-image mb-2">

    <thead>
        <tr>
        <th scope="col"  class="text-center">#</th>
        <th scope="col"  class="text-center">User</th>
        <th scope="col"  class="text-center">Plan Type</th>
        <th scope="col"  class="text-center">Order ID</th>
        <th scope="col" class="text-center">Amount</th>
        <th scope="col" class="text-center">Discount</th>
        </tr>
    </thead>
    <tbody>
        
    <?php $i=1 ?>

    @foreach ($user_order as $each_user_order)

        <tr>
      <th scope="row" class="text-center">{{ $i }}</th>
                <td class="w-25 text-center" style="height: 70px;">
                    {{ $each_user_order->user }}
                </td>
      
      <td class="text-center">{{ $each_user_order->payment_plan }}</td>

      <td class="text-center">{{ $each_user_order->order_id }}</td>

      <td class="text-center">{{ $each_user_order->payment_amount }}</td>
        
        @if ($each_user_order->payment_discount)
      <td class="text-center">{{ $each_user_order->payment_discount }}</td>
        @else
      <td class="text-center"> - </td>
        @endif

      
    </tr>
        
    <?php $i++ ?>

    @endforeach

        </tbody>
    </table>
</div>




<div class="table-responsive mobile_plan_table">
    <!-- <table id="dataTableExample" class="table table-dark table-image mb-2"> -->
    <table id="" class="display table table-image mb-2">
    
    <thead>
        <tr>
        <th scope="col" class="text-center">#</th>
        <th scope="col"  class="text-center">User</th>
        <th scope="col" class="text-center">Plan Type</th>
        </tr>
    </thead>
    <tbody>
        
    <?php $i=1 ?>

        @foreach ($user_order as $each_user_order)

        <tr>
      <th scope="row" class="text-center">{{ $i }}</th>
                <td class="w-25 text-center" style="height: 70px;">
                    {{ $each_user_order->user }}
                </td>
      
      <td class="text-center">{{ $each_user_order->payment_plan }}</td>


    </tr>
        
    <?php $i++ ?>

        @endforeach

        </tbody>
    </table>
</div>

    </div></div>




    <div class="container-fluid py-4 mt-4">
        Donation Plan Lists
    </div>

    <div class="card w-75">
    <div class="card-body">

    <div class="table-responsive plan_table">
    <!-- <table id="dataTableExample" class="table table-dark table-image mb-2"> -->
    <table id="" class="display table table-image mb-2">

    <thead>
        <tr>
        <th scope="col"  class="text-center">#</th>
        <th scope="col"  class="text-center">Plan Type</th>
        <th scope="col"  class="text-center">Info</th>
        <th scope="col" class="text-center">Amount</th>
        <th scope="col" class="text-center">Discount</th>
        </tr>
    </thead>
    <tbody>
        
    <?php $i=1 ?>

        @foreach ($donation as $each_donation)

        <tr>
      <th scope="row" class="text-center">{{ $i }}</th>
                <td class="w-25 text-center" style="height: 70px;">
                    {{ $each_donation->plan_type }}
                </td>
      <td class="text-center">{{ Str::limit($each_donation->plan_info, 25, $end='...') }}</td>
      <td class="text-center">{{ $each_donation->amount }}</td>
        
        @if ($each_donation->discount)
      <td class="text-center">{{ $each_donation->discount }}</td>
        @else
      <td class="text-center"> - </td>
        @endif
      
    </tr>
        
    <?php $i++ ?>

        @endforeach

        </tbody>
    </table>
</div>




<div class="table-responsive mobile_plan_table">
    <!-- <table id="dataTableExample" class="table table-dark table-image mb-2"> -->
    <table id="" class="display table table-image mb-2">
    
    <thead>
        <tr>
        <th scope="col" class="text-center">#</th>
        <th scope="col" class="text-center">Plan Type</th>
        <th scope="col" class="text-center">Amount</th>
        <th scope="col" class="text-center">Discount</th>
        </tr>
    </thead>
    <tbody>
        
    <?php $i=1 ?>

        @foreach ($donation as $each_donation)

        <tr>
      <th scope="row" class="text-center">{{ $i }}</th>
                <td class="w-25 text-center" style="height: 70px;">
                    {{ $each_donation->plan_type }}
                </td>

      <td class="text-center">{{ $each_donation->amount }}</td>
        
        @if ($each_donation->discount)
      <td class="text-center">{{ $each_donation->discount }}</td>
        @else
      <td class="text-center"> - </td>
        @endif

    </tr>
        
    <?php $i++ ?>

        @endforeach

        </tbody>
    </table>
</div>

    </div></div>

    <!-- display table -->
    <script src="{{asset('assets/admin/js/table_display.js')}}"></script>

    
    @endsection

