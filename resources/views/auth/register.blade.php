@extends('main_master')

@section('content')

<div class="registerWrapper">
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4">
            <div class="card">    
                <div class="card-header">
                    <div class="picture">
                        <img src="{{asset('assets/ui/img/avatar.svg')}}" alt="LoginPicture">
                    </div>
                </div>

        <div class="card-body">
            <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="form-group mb-3 user-id">
                        <span class="fa-solid fa-user p-2"></span> 
                        <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" placeholder="Enter Name" autocomplete="name" required>
                </div>
                
                <div class="form-group mb-3 user-id">
                        <span class="fa-solid fa-user p-2"></span> 
                        <input type="text" name="username" id="username" class="form-control" value="{{old('username')}}" placeholder="Enter Username" autocomplete="username" required>
                </div>
      
                <div class="form-group mb-3 user-id">
                        <span class="fa-solid fa-envelope px-2"></span>
                        <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" placeholder="Enter Email" autocomplete="email" required>
                </div>

                  <div class="form-group mb-3 user-id">
                    <span class="fas fa-lock px-2"></span> 
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                     <span class="fa-regular fa-eye-slash" onclick="regChg(this)"></span>
                </div>

                  <div class="form-group mb-3 user-id">
                    <span class="fas fa-lock px-2"></span> 
                    <input type="password" name="password_confirmation" id="c_password" class="form-control" autocomplete="new-password" value="{{old('password_confirmation')}}" placeholder="Enter Confirm Password">
                     <span class="fa-regular fa-eye-slash" onclick="regChgco(this)"></span>
                </div>
                
                <div class="form-group mb-3 user-id">
                        <i class="fa-solid fa-address-book px-2"></i>
                        <input type="text" name="address" id="address" class="form-control" value="{{old('address')}}" placeholder="Enter Address" autocomplete="address" required>
                </div>
              
            <div class="form-group mb-3">
                    {{-- <span class="fa-solid fa-phone px-2"></span> --}}
                   <div class="country-form">
                     <input type="text" name="number" id="number" value="{{old('number')}}" placeholder="Enter Phone Number" autocomplete="number" required>                     
                   </div>
            </div>
       
                <div class="form-group mb-3 user-id select-box">
                        <span class="fa-solid fa-globe px-2"></span>
                        <select name="country" id="countries" onchange="loadCountries()">
                        <option selected="selected" value="{{old('country')}}"> Select Your Country </option>
                        </select>
                </div>
          
                <div class="form-group mb-3">
                    <button type="submit" class="w-100 rounded-0 btn btn-primary"> Register </button>
                </div>

                <div class="text-center text-muted regLink"> 
                If you have an account? <a href="{{url('login')}}"> Login </a>
             </div>
            </form>

             <div class="p-0">
                <div class="flex justify-center items-center">
                <div class="w-4/6 border border-gray-400 h-0"></div>
                <div class="w-6/6 mb-[7px] text-center text-white dark:text-white"></div>
                <div class="w-4/6 border border-gray-400 h-0"></div>
              </div>
             </div>
                </div>
            </div>
      
            </div>
        </div>
    </div>
@endsection

