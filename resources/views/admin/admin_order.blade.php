


@extends('admin.dashboard')

@section('content')




<div class="page-content">



<div class="order_body">

        <div class="card">
            <div class="card-body">


            <div class="mb-4">
        <h4>Donate Subscribers of Donation Plan</h4>
            </div>


            <div class="table-responsive plan_table">
            <!-- <table id="dataTableExample" class="table table-dark table-image mb-2"> -->
            <table id="" class="display table table-dark table-image mb-2">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col" class="text-center">Order ID</th>
        <th scope="col" class="text-center">User ID</th>
        <th scope="col" class="text-center">User</th>
        <th scope="col" class="text-center">Payment Type</th>
        <th scope="col" class="text-center">Amount</th>
        <th scope="col" class="text-center">Discount</th>
        <th scope="col" class="text-center">Phone</th>
        <th scope="col" class="text-center">Country</th>
        </tr>
    </thead>
    <tbody>
        
    <?php $i=1 ?>

        @foreach ($order as $each_order)

        <tr>
      <th scope="row"><a href="{{route('all.single_user',$each_order->user_id)}}"> {{ $i }} </a></th>
                <td class="text-center">{{ $each_order->order_id }}</td>
                <td class="text-center">{{ $each_order->user_id }}</td>
                <td class="text-center"><a href="{{route('all.single_user',$each_order->user_id)}}"> {{ $each_order->user }} </a></td>

      <td class="text-center">{{ Str::limit($each_order->payment_plan, 25, $end='...') }}</td>
        
            @if ($each_order->payment_discount)
        <td class="text-center" style="color: #565656;">{{ $each_order->payment_amount }}</td>
            @else
        <td class="text-center">{{ $each_order->payment_amount }}</td>
            @endif

            @if ($each_order->payment_discount)
        <td class="text-center">{{ $each_order->payment_discount }}</td>
            @else
        <td class="text-center" style="color: #565656;"> - </td>
            @endif

      <td class="text-center">{{ $each_order->phone }}</td>
      <td class="text-center">{{ $each_order->country }}</td>
        

      
    </tr>
        
    <?php $i++ ?>

        @endforeach

        </tbody>
    </table>
            </div>




<div class="table-responsive mobile_plan_table">
    <!-- <table id="dataTableExample" class="table table-dark table-image mb-2"> -->
    <table id="" class="display table table-dark table-image mb-2">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col" class="text-center">Order ID</th>
        <th scope="col" class="text-center">User</th>
        </tr>
    </thead>
    <tbody>
        
    <?php $i=1 ?>

        @foreach ($order as $each_order)

        <tr>
      <th scope="row"><a href="{{route('all.single_user',$each_order->user_id)}}"> {{ $i }} </a></th>
                <td class="text-center">{{ $each_order->order_id }}</td>
                <td class="text-center"><a href="{{route('all.single_user',$each_order->user_id)}}"> {{ $each_order->user }} </a></td>
      
    </tr>
        
    <?php $i++ ?>

        @endforeach

        </tbody>
    </table>
</div>





            </div>
        </div>

</div>


    <!-- display table -->
    <script src="{{asset('assets/admin/js/table_display.js')}}"></script>


</div>

@endsection


