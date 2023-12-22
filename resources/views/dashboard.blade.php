@extends('main_master2')

@section('content')


<div class="dasboard_body">
    <form action="{{ route('logout') }}" method="POST">
            @csrf
        <button class="btn btn-sm btn-dark" type="submit">Log Out</button>
    </form>
    <br>
    <a class="btn btn-sm btn-info" href="{{ route('profile.edit') }}">Profile</a>
</div>


@endsection



