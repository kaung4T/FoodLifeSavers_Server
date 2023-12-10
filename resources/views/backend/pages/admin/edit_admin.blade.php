@extends('admin.dashboard')

@section('content')

<div class="page-content">
        <div class="row profile-body">
          <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
    
        <div class="card">
        <div class="card-body">

        <h6 class="card-title"> Edit Admin </h6>

        <form action="{{ route('update.admin',$user->id) }}" method="POST" class="forms-sample">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label"> Admin Name </label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}">
                @error('name')
                    <span class="text-danger" role="alert"> {{$message}} </span>
                @enderror
            </div>

             <div class="mb-3">
                <label for="username" class="form-label"> Admin User Name </label>
                <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{$user->username}}">
                @error('username')
                    <span class="text-danger" role="alert"> {{$message}} </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label"> Admin Email </label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}">
                @error('email')
                    <span class="text-danger" role="alert"> {{$message}} </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="number" class="form-label"> Admin Phone </label>
                <input type="number" name="number" id="number" class="form-control @error('number') is-invalid @enderror" value="{{$user->number}}">
                @error('number')
                    <span class="text-danger" role="alert"> {{$message}} </span>
                @enderror
            </div>

             <div class="mb-3">
                <label for="address" class="form-label"> Admin Address </label>
                <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" value="{{$user->address}}">
                @error('address')
                    <span class="text-danger" role="alert"> {{$message}} </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="country" class="form-label"> Admin Country </label>
                <input type="text" name="country" id="country" class="form-control @error('country') is-invalid @enderror" value="{{$user->country}}">
                @error('country')
                    <span class="text-danger" role="alert"> {{$message}} </span>
                @enderror
            </div>

             <div class="mb-3">
                <label for="roles" class="form-label"> Role Name </label>
            <select name="roles" id="roles" class="form-control">
                <option selected="" disabled=""> Select Role </option>
                @foreach ($roles as $role)
                            <option value="{{$role->id}}" {{$user->hasRole($role->name) ? 'selected' : ''}}> {{$role->name}} </option>
                @endforeach
            </select>
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