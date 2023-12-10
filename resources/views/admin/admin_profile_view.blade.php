@extends('admin.dashboard')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	<div class="page-content">
        <div class="row profile-body">
          <!-- left wrapper start -->
          <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
            <div class="card rounded">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                 
                <div>
                    <img class="wd-100 rounded-circle" src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="profile">
                   
                    <span class="h4 ms-3"> {{ $profileData->name }} </span>
                  </div>
                </div>
               
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">User Name:</label>
                  <p class="text-muted"> {{ $profileData->username }} </p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                  <p class="text-muted"> {{ $profileData->email }} </p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                  <p class="text-muted"> {{ $profileData->number }} </p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                  <p class="text-muted"> {{ $profileData->address }} </p>
                </div>
                <div class="mt-3 d-flex social-links">
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="github"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="twitter"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="instagram"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- left wrapper end -->
          <!-- middle wrapper start -->
          <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
              
                <div class="card">
              <div class="card-body">

        <h6 class="card-title"> Update Admin Profile </h6>

        <form action="{{ route('admin.profile.store') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$profileData->name}}" autocomplete="off" placeholder="Name">
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="{{$profileData->username}}" autocomplete="off" placeholder="Username">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="{{$profileData->email}}" placeholder="Email">
            </div>

             <div class="mb-3">
                <label for="number" class="form-label">Phone</label>
                <input type="number" class="form-control" name="number" id="number" value="{{$profileData->number}}" autocomplete="off" placeholder="Phone">
            </div>

             <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address" value="{{$profileData->address}}" autocomplete="off" placeholder="Address">
            </div>

           <div class="mb-3">
                <label class="form-label" for="image">Photo</label>
                <input type="file" name="photo" id="image" class="form-control">
            </div>

             <div class="mb-3">
            <label class="form-label"></label>
            <img id="showImage" class="wd-80 rounded-circle" src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="profile">
             </div>

            <button type="submit" class="btn btn-primary me-2"> Save Changes </button>
            <button class="btn btn-secondary">Cancel</button>
        </form>

              </div>
            </div>
             
            </div>
          </div>
          <!-- middle wrapper end -->
         
        </div>

        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#image').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#showImage').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });
        </script>

@endsection