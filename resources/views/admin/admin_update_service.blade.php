@extends('admin.dashboard')

@section('content')

<div class="page-content">

    <div class="update_body">

    <div class="mb-4">
    <a href="{{ route('admin.customize_service') }}"><i class="bi bi-arrow-left"></i> Back</a>
    </div>


<div class="card mb-4">
    <div class="card-body">

    <h4 class="mb-4">Update Item</h4>
        
        <form action="{{ route('admin.update_store', $service_item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group row mb-3">
            <label class="col-sm-5 col-form-label">Service Name</label>
            <div class="col-sm-7">
            <input name="name" type="text" class="form-control" value="{{ $service_item->name }}">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-sm-5 col-form-label">Text</label>
            <div class="col-sm-7">
            <input name="text" type="text" class="form-control" value="{{ $service_item->text }}">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-sm-5 col-form-label">Price</label>
            <div class="col-sm-7">
            <input name="price" type="number" class="form-control" value="{{ $service_item->price }}">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label class="col-sm-5 col-form-label">Image</label>
            <div class="col-sm-7">
            <input name="file" type="file" class="form-control" value="{{ $service_item->file_path }}" required>
            </div>
        </div>
            <button type="submit" class="btn btn-outline-primary mt-3 service_button">Update</button>
    
        </form>
    </div>
</div>
    

    </div>

</div>


@endsection

