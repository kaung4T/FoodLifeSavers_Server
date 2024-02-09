@extends('admin.dashboard')

@section('content')


<div class="page-content">




<div class="count_down_body mb-4">

<div class="card">
    <div class="card-body">

<div class="mb-4">
<h4>Add End-Date for CountDown</h4>
</div>

<form action="{{ route('admin.count_down_store') }}" method="POST" enctype="multipart/form-data">
        @csrf

<div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">End Date</label>
        <div class="col-sm-7">
        <input type="date" id="birthday" name="end_date" class="form-control" required>
        <!-- <input name="end_date" type="number" class="form-control" placeholder="Enter End-Date" required> -->
        </div>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" name="check_count_down" class="form-check-input" id="check_count_down" checked>
        <label class="form-check-label" for="check_count_down">Approved</label>
    </div>

        <button type="submit" class="btn btn-outline-primary mt-3 service_button">Submit</button>

    </form>

    </div>
    </div>

    </div>





    <div class="customize_count_down_body">

<div class="card">
    <div class="card-body">

    <div class="mb-4">
<h4>Customize Count-Down</h4>
    </div>

    <div class="table-responsive plan_table">
    <!-- <table id="dataTableExample" class="table table-dark table-image mb-2"> -->
    <table id="" class="display table table-dark table-image mb-2">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col" class="text-center">End Date</th>
        <th scope="col" class="text-center">User</th>
        <th scope="col" class="text-center">Approved</th>
        <th scope="col" class="text-center"></th>
        <th scope="col" class="text-center"></th>
        </tr>
    </thead>
    <tbody>
        
    <?php $i=1 ?>

        @foreach ($count_down as $each_count_down)

        <tr>
      <th scope="row"><a href=""> {{ $i }} </a></th>
                <td class="text-center">{{ $each_count_down->end_date }}</td>
                <td class="text-center"><a href=""> {{ $each_count_down->user }} </a></td>
                <td class="text-center"> {{ $each_count_down->approved }} </td>

                <td><a href="{{ route('admin.count_down_update', $each_count_down->id) }}" class="btn btn-sm btn-outline-primary">Edit</a></td>
                <td>
                    <form action="{{ route('admin.count_down_delete', $each_count_down->id) }}" method="POST">
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
        <th scope="col" class="text-center">End Date</th>
        <th scope="col" class="text-center">User</th>
        <th scope="col" class="text-center">Approved</th>
        <th scope="col" class="text-center"></th>
        <th scope="col" class="text-center"></th>
        </tr>
    </thead>
    <tbody>
        
    <?php $i=1 ?>

        @foreach ($count_down as $each_count_down)

        <tr>
      <th scope="row"><a href=""> {{ $i }} </a></th>
                <td class="text-center">{{ $each_count_down->end_date }}</td>
                <td class="text-center"><a href=""> {{ $each_count_down->user }} </a></td>
                <td class="text-center"> {{ $each_count_down->approved }} </td>

                <td><a href="{{ route('admin.count_down_update', $each_count_down->id) }}" class="btn btn-sm btn-outline-primary">Edit</a></td>
                <td>
                    <form action="{{ route('admin.count_down_delete', $each_count_down->id) }}" method="POST">
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

