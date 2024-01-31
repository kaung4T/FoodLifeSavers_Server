


@extends('main_master2')

@section('content')

    <div class="loginWrapper">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
            <div class="card">    
                <div class="card-header">
                    <div class="picture">
                        <img src="{{asset('assets/ui/img/avatar.svg')}}" alt="LoginPicture">
                    </div>
                </div>


                @if ($errors->has('email'))

                <div class="alert alert-info w-50" role="alert" style="margin: auto;margin-top: 30px;margin-bottom: -30px;">
            <b class="" role="alert">{{ $errors->first('email') }}</b>
                </div>
                
                @endif


        <div class="card-body">
            

        <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <x-input-label class="col-sm-5" for="email" :value="__('Email')" />
            <div class="col-sm-7">
            <x-text-input placeholder="Enter Email" id="email" class="form-control block mt-1" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="btn btn-primary btn-sm">
                <!-- {{ __('Email Password Reset Link') }} -->
                Reset
            </x-primary-button>
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

