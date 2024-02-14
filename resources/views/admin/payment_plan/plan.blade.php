@extends('admin.dashboard')

@section('content')

<div class="page-content">



<div class="create_plan mb-4">


<div class="card">
    <div class="card-body">

<div class="mb-4">
<h4>Add Donation Plan</h4>
</div>

<form action="{{ route('admin.plan_store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Plan Type</label>
        <div class="col-sm-7 ">
            <select id="plan" name="plan_type" class="account_country form-control select-box" required>
                          <option value="Daily Plan">Daily Plan</option>
                          <option value="Monthly Plan">Monthly Plan</option>
                          <option value="Advanced Plan">Advanced Plan</option>
            </select>
            <div class="form-text">Please contact developers to add new more plans!</div>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Plan Info</label>
        <div class="col-sm-7">
        <input name="plan_text" type="text" class="form-control" maxlength="255" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Amount</label>
        <div class="col-sm-7">
        <input name="plan_amount" type="number" class="form-control" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Discount</label>
        <div class="col-sm-7">
        <input name="plan_discount" type="number" class="form-control">
        </div>
    </div>

        <button type="submit" class="btn btn-outline-primary mt-3 service_button">Submit</button>

    </form>

            </div>

  
        </div>
    </div>




<div class="plan_body">

<div class="card">
    <div class="card-body">

    <div class="mb-4">
<h4>Customize Donation Plan</h4>
    </div>


    <div class="table-responsive plan_table">
    <!-- <table id="dataTableExample" class="table table-dark table-image mb-2"> -->
    <table id="" class="display table table-dark table-image mb-2">

    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Plan Type</th>
        <th scope="col">Info</th>
        <th scope="col" class="text-center">Amount</th>
        <th scope="col" class="text-center">Discount</th>
        <th scope="col" class="text-center"></th>
        <th scope="col" class="text-center"></th>
        </tr>
    </thead>
    <tbody>
        
    <?php $i=1 ?>

        @foreach ($donation as $each_donation)

        <tr>
      <th scope="row">{{ $i }}</th>
                <td class="w-25">
                    {{ $each_donation->plan_type }}
                </td>
      <td>{{ Str::limit($each_donation->plan_info, 25, $end='...') }}</td>
      <td class="text-center">{{ $each_donation->amount }}</td>
        
        @if ($each_donation->discount)
      <td class="text-center">{{ $each_donation->discount }}</td>
        @else
      <td class="text-center"> - </td>
        @endif
      <td class="text-center"><a href="{{ route('admin.plan_update', $each_donation->id) }}" class="btn btn-sm btn-outline-primary">Edit</a></td>
      <td class="text-center">
            <form action="{{ route('admin.plan_delete', $each_donation->id) }}" method="POST">
                @csrf
        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
            </form>
      </td>
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
        <th scope="col">Plan Type</th>
        <th scope="col" class="text-center"></th>
        <th scope="col" class="text-center"></th>
        </tr>
    </thead>
    <tbody>
        
    <?php $i=1 ?>

        @foreach ($donation as $each_donation)

        <tr>
      <th scope="row">{{ $i }}</th>
                <td class="w-25">
                    {{ $each_donation->plan_type }}
                </td>

      <td class="text-center"><a href="{{ route('admin.plan_update', $each_donation->id) }}" class="btn btn-sm btn-outline-primary">Edit</a></td>
      <td class="text-center">
            <form action="{{ route('admin.plan_delete', $each_donation->id) }}" method="POST">
                @csrf
        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
            </form>
      </td>
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
