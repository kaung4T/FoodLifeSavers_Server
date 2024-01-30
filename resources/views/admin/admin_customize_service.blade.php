@extends('admin.dashboard')

@section('content')

<div class="page-content">

    <div class="customize_body">


<div class="card mb-4">
    <div class="card-body">

    <h4 class="mb-3">Add Service Item</h4>
    <div class="mb-2">
        <a href="{{ route('admin.service') }}" class="">Add Your Service</a>    
    </div>
    
    </div>
</div>


<div class="card">
    <div class="card-body">
        <h4 class="mb-4">Customize Your Service Item</h4>

        <div class="table-responsive plan_table">
        <!-- <table  id="dataTableExample" class="table table-dark table-image mb-2"> -->
        <table id="" class="display table table-dark table-image mb-2">

    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Text</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        
    <?php $i=1 ?>

        @foreach ($all_service as $each_services)

        <tr>
      <th scope="row">{{ $i }}</th>
                <td class="w-25">
                    <img class="img-fluid img-thumbnail service_img rounded" src="{{ asset('storage/app/public/'.$each_services->file_path) }}" alt="">
                </td>
      <td>{{ $each_services->name }}</td>
      <td>{{ Str::limit($each_services->text, 25, $end='...') }}</td>
      <td><a href="{{ route('admin.update_service', $each_services->id) }}" class="btn btn-sm btn-outline-primary">Edit</a></td>
      <td>
            <form action="{{ route('admin.delete', $each_services->id) }}" method="POST">
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
            <th scope="col">Image</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        
    <?php $i=1 ?>

        @foreach ($all_service as $each_services)

        <tr>
      <th scope="row">{{ $i }}</th>
                <td class="w-25">
                    <img class="img-fluid img-thumbnail service_img rounded" src="{{ asset('storage/app/public/'.$each_services->file_path) }}" alt="">
                </td>
      <td><a href="{{ route('admin.update_service', $each_services->id) }}" class="btn btn-sm btn-outline-primary">Edit</a></td>
      <td>
            <form action="{{ route('admin.delete', $each_services->id) }}" method="POST">
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

