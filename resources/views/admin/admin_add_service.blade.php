@extends('admin.dashboard')

@section('content')

<div class="page-content">


<div class="service_body">

<h2 class="mb-5">Add Service Item</h3>
        
    <form action="" method="POST" enctype="multipart/form-data" class="mb-7">
        @csrf
        
        <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Service Name</label>
        <div class="col-sm-7">
        <input type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Text</label>
        <div class="col-sm-7">
        <input type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Price</label>
        <div class="col-sm-7">
        <input type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Image</label>
        <div class="col-sm-7">
        <input type="file" class="form-control">
        </div>
    </div>
        <button type="submit" class="btn btn-outline-primary mt-3 service_button">Submit</button>

    </form>


    <h3 class="mb-3">Customize Service Item</h3>

    <div class="mb-7">
        <a href="" class="">Your Service Group</a>    
    </div>
    

</div>



</div>

@endsection


