@extends('admin.dashboard')

@section('content')

<div class="page-content">
        <div class="row profile-body">
          <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
    
        <div class="card">
        <div class="card-body">

        <h6 class="card-title"> Add Products </h6>

        <form action="{{ route('store.product') }}" method="POST" class="forms-sample">
            @csrf
            <div class="mb-3">
                <label for="product_name" class="form-label"> Product Name </label>
                <input type="text" name="product_name" id="product_name" class="form-control @error('product_name') is-invalid @enderror">
                @error('product_name')
                    <span class="text-danger" role="alert"> {{$message}} </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="product_icon" class="form-label"> Product Icon </label>
                <input type="text" name="product_icon" id="product_icon" class="form-control @error('product_icon') is-invalid @enderror">
                @error('product_icon')
                    <span class="text-danger" role="alert"> {{$message}} </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary me-2"> Save Changes </button>
        </form>

        </div>
        </div>
             
        </div>
          </div>         
        </div>

        </div>

@endsection 