@extends('admin.dashboard')

@section('content')

<div class="page-content">


<div class="service_body">

<div class="card mb-4">
    <div class="card-body">

<h4 class="mb-4">Add Service Item</h4>
        
    <form action="{{ route('admin.service_store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Service Name</label>
        <div class="col-sm-7">
        <input name="name" type="text" class="form-control"  maxlength="255" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Text</label>
        <div class="col-sm-7">
        <input name="text" type="text" class="form-control"  maxlength="255" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Price</label>
        <div class="col-sm-7">
        <input name="price" type="number" class="form-control">
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Image</label>
        <div class="col-sm-7">
        <input name="file" type="file" class="form-control">
        </div>
    </div>
        <button type="submit" class="btn btn-outline-primary mt-3 service_button">Submit</button>

    </form>

    </div>
</div>


<div class="card">
    <div class="card-body">

    <h4 class="mb-3">Customize Service Item</h4>

    <div class="mb-2">
        <a href="{{ route('admin.customize_service') }}" class="">Your Service Group</a>    
    </div>


    </div>
</div>
    


</div>



</div>

@endsection


