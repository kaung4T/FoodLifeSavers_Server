@extends('admin.dashboard')

@section('content')

<div class="page-content">


<div class="service_body">

<h3 class="mb-5">Add Service Item</h3>
        
    <form action="{{ route('admin.service_store') }}" method="POST" enctype="multipart/form-data" class="mb-7">
        @csrf
        
        <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Service Name</label>
        <div class="col-sm-7">
        <input name="name" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Text</label>
        <div class="col-sm-7">
        <input name="text" type="text" class="form-control">
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


    <h4 class="mb-3">Customize Service Item</h4>

    <div class="mb-7">
        <a href="{{ route('admin.customize_service') }}" class="">Your Service Group</a>    
    </div>
    

</div>



</div>

@endsection


