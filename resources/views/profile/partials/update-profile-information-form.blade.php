<section class="profile_info">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" style="margin-top: 40px;">
        @csrf
        @method('patch')

        <div class="form-group row">
            <x-input-label class="col-sm-2 col-form-label text-dark" for="name" :value="__('Name')" />
            <div class="col-sm-4">
                <x-text-input id="name" name="name" type="text" class="form-control mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
        </div>

         <div class="form-group row">
            <x-input-label class="col-sm-2 col-form-label text-dark" for="username" :value="__('User Name')" />
            <div class="col-sm-4">
                <x-text-input id="username" name="username" type="text" class="form-control mt-1 block w-full" :value="old('username', $user->username)" required autofocus autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('username')" />
            </div>
        </div>

        <div class="form-group row">
            <x-input-label class="col-sm-2 col-form-label text-dark" for="email" :value="__('Email')" />
            <div class="col-sm-4">
                <x-text-input id="email" name="email" type="email" class="form-control mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

          <div class="form-group row">
            <x-input-label class="col-sm-2 col-form-label text-dark" for="number" :value="__('Mobile Number')" />
            <div class="col-sm-4">
                <x-text-input id="number" name="number" type="text" class="form-control mt-1 block w-full" :value="old('number', $user->number)" required autofocus autocomplete="number" />
                <x-input-error class="mt-2" :messages="$errors->get('number')" />
            </div>
        </div>

         <div class="form-group row">
            <x-input-label class="col-sm-2 col-form-label text-dark" for="address" :value="__('Address')" />
            <div class="col-sm-4">
                <x-text-input id="address" name="address" type="text" class="form-control mt-1 block w-full" :value="old('address', $user->address)" required autofocus autocomplete="address" />
                <x-input-error class="mt-2" :messages="$errors->get('address')" />
            </div>
        </div>

         <div class="form-group row">
            <x-input-label class="col-sm-2 col-form-label text-dark" for="country" :value="__('Country')" />
            <div class="col-sm-4">
                <x-text-input id="country" name="country" type="text" class="form-control mt-1 block w-full" :value="old('country', $user->country)" required autofocus autocomplete="country" />
                <x-input-error class="mt-2" :messages="$errors->get('country')" />
            </div>
        </div>


        <div class="flex items-center gap-5">
            <x-primary-button class="btn btn-sm btn-primary">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
