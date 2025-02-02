<section class="profile_update">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="form-group row">
            <x-input-label class="col-sm-2 col-form-label text-dark" for="current_password" :value="__('Current Password')" />
            <div class="col-sm-4">
                <x-text-input id="current_password" name="current_password" type="password" class="form-control mt-1 block w-full" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>
        </div>

        <div class="form-group row">
            <x-input-label class="col-sm-2 col-form-label text-dark" for="password" :value="__('New Password')" />
            <div class="col-sm-4">
                <x-text-input id="password" name="password" type="password" class="form-control mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>
        </div>

        <div class="form-group row">
            <x-input-label class="col-sm-2 col-form-label text-dark" for="password_confirmation" :value="__('Confirm Password')" />
            <div class="col-sm-4">
                <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="form-control mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="btn btn-sm btn-primary">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
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
