@extends('admin.dashboard')

@section('content')

<div class="page-content">
        <div class="row profile-body">
          <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
    
        <div class="card">
        <div class="card-body">

        <h6 class="card-title"> Edit Products </h6>

        <form action="{{ route('update.product') }}" method="POST" class="forms-sample">
            @csrf
            <input type="hidden" name="id" value="{{$types->id}}">
            <div class="mb-3">
                <label for="product_name" class="form-label"> Product Name </label>
                <input type="text" name="product_name" id="product_name" class="form-control @error('product_name') is-invalid @enderror" value="{{ $types->product_name }}">
                @error('product_name')
                    <span class="text-danger" role="alert"> {{$message}} </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="product_icon" class="form-label"> Product Icon </label>
                <input type="text" name="product_icon" id="product_icon" class="form-control @error('product_icon') is-invalid @enderror"  value="{{ $types->product_icon }}">
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