@extends('main_master2')

@section('content')





{{$service->name}}

<img class="card-img-top w-25" src="{{ asset('storage/app/public/'.$service->file_path) }}" alt="">


@endsection


