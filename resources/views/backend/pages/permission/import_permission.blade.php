@extends('admin.dashboard')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">

     <nav class="page-breadcrumb">
         <ol class="breadcrumb">
            <a href="{{route('export')}}" class="btn btn-inverse-danger"> Download Xlsx </a> 
        </ol>
    </nav>

        <div class="row profile-body">
          
        <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
    
        <div class="card">
        <div class="card-body">

        <h6 class="card-title"> Import Permission </h6>

        <form id="myForm" action="{{ route('import') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="name" class="form-label"> Xlsx File Import </label>
                <input type="file" name="import_file" id="import_file" class="form-control">
            </div>
            <button type="submit" class="btn btn-inverse-warning me-2"> Upload </button>
        </form>

        </div>
        </div>
             
        </div>
          </div>         
        </div>

        </div>
@endsection 