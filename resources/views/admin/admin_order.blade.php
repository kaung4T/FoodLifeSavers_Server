


@extends('admin.dashboard')

@section('content')




<div class="page-content">



<div class="order_body">

        <div class="card">
            <div class="card-body">


            <div class="mb-4">
        <h4>Customize Donation Plan</h4>
            </div>


            <table class="table table-dark table-image mb-2">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Order ID</th>
        <th scope="col">User ID</th>
        <th scope="col">User</th>
        <th scope="col">Payment Type</th>
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
      <th scope="row">{{ $i }}</th>
                <td>{{ $each_order->order_id }}</td>
                <td>{{ $each_order->user_id }}</td>
                <td>{{ $each_order->user }}</td>

      <td>{{ Str::limit($each_order->payment_plan, 25, $end='...') }}</td>
      <td class="text-center">{{ $each_order->payment_amount }}</td>
        
            @if ($each_order->payment_discount)
        <td class="text-center">{{ $each_order->payment_discount }}</td>
            @else
        <td class="text-center"> - </td>
            @endif

      <td class="text-center">{{ $each_order->phone }}</td>
      <td class="text-center">{{ $each_order->country }}</td>
        

      
    </tr>
        
    <?php $i++ ?>

        @endforeach

        </tbody>
    </table>


            </div>
        </div>

</div>




</div>

@endsection


