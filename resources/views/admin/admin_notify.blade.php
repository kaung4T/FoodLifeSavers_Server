


@extends('admin.dashboard')

@section('content')




<div class="page-content">



<div class="notify_body">

        <div class="card">
            <div class="card-body">


            <div class="mb-4">
        <h4>Payment Results</h4>
            </div>


            <div class="table-responsive plan_table">
            <!-- <table  id="dataTableExample" class="table table-dark table-image mb-2"> -->
            <table id="" class="display table table-dark table-image mb-2">
    
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col" class="text-center">Status_nm</th>
        <th scope="col" class="text-center">Status</th>
        <th scope="col" class="text-center">Amount</th>
        <th scope="col" class="text-center">Transaction_id</th>
        <th scope="col" class="text-center">Descriptor</th>
        <th scope="col" class="text-center">Tdate</th>
        <th scope="col" class="text-center">Curr</th>
        <th scope="col" class="text-center">Reason</th>
        <th scope="col" class="text-center">Id_order</th>
        </tr>
    </thead>
    <tbody>
        
    <?php $i=1 ?>

        @foreach ($notify as $each_notify)

        <tr>
      <th scope="row">{{ $i }}</th>
      
                <td class="text-center">{{ $each_notify->status_nm }}</td>

                    @if ($each_notify->status == 'Success')
                <td class="text-center text-success">{{ $each_notify->status }}</td>
                    @else
                <td class="text-center">{{ $each_notify->status }}</td>
                    @endif

                <td class="text-center">{{ $each_notify->amount }}</td>

        <td class="text-center">{{ $each_notify->transaction_id }}</td>

      <!-- <td class="text-center" style="max-width: 110px;white-space: normal;">{{ Str::limit($each_notify->descriptor, 25, $end='...') }}</td> -->
      <td class="text-center">{{ Str::limit($each_notify->descriptor, 25, $end='...') }}</td>

        <td class="text-center">{{ $each_notify->tdate }}</td>


      <td class="text-center">{{ $each_notify->curr }}</td>
      <td class="text-center">{{ $each_notify->reason }}</td>
      <td class="text-center">{{ $each_notify->id_order }}</td>
        

      
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
        <th scope="col" class="text-center">Status</th>
        <th scope="col" class="text-center">Transaction_id</th>
        </tr>
    </thead>
    <tbody>
        
    <?php $i=1 ?>

        @foreach ($notify as $each_notify)

        <tr>
      <th scope="row">{{ $i }}</th>
                
                    @if ($each_notify->status == 'Success')
                <td class="text-center text-success">{{ $each_notify->status }}</td>
                    @else
                <td class="text-center">{{ $each_notify->status }}</td>
                    @endif

                <td class="text-center">{{ $each_notify->transaction_id }}</td>
      
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


