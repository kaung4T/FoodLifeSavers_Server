@extends('main_master2')

@section('content')

    <div class="loginWrapper">
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4">
            <div class="card">    
                <div class="card-header">
                    <div class="picture">
                        <img src="{{asset('assets/ui/img/avatar.svg')}}" alt="LoginPicture">
                    </div>
                </div>

        <div class="card-body">
            <form action="{{route('login')}}" method="POST">
                @csrf
            
             <div class="mb-3">       
             <div class="form-group user-id">
                    <span class="fa-solid fa-user p-2"></span> 
                    <input type="text" name="login" id="login" class="form-control @error('login') is-invalid @enderror" placeholder="Enter ID" required>
             </div>
               @error('login')
                    <span class="invalid-feedback text-danger" role="alert"> {{$message}} </span>
                @enderror 
                </div>
              

            <div class="form-group user-id">
                    <span class="fas fa-lock px-2"></span> 
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password">
                     <span class="fa-regular fa-eye-slash" onclick="chg(this)"></span>
                </div>
                  @error('password')
                    <span class="invalid-feedback text-danger" role="alert"> {{$message}} </span>
                @enderror
                 

            <div class="form-group mb-3 resetTick"> 
               <div class="tick">
                 <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> 
                <label for="remember" class="text-muted">Remember me</label> 
               </div>
                <a href="{{ route('password.request') }}" id="forgot" class="font-weight-bold">Forgot password?</a>
          </div>

                <div class="form-group mb-3">
                    <button type="submit" class="w-100 rounded-0 btn btn-primary"> Login </button>
                </div>

                <div class="text-center text-muted regLink"> 
                Don't have an account? <a href="{{url('register')}}"> Register </a>
             </div>
            </form>

             <div class="mt-3">
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
