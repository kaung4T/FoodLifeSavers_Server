@extends('main_master2')

@section('content')



<div class="each_service_card">

<img class="card-img-top each_service_image" src="{{ asset('storage/app/public/'.$service->file_path) }}" alt="">

<div class="each_service_body">
    <h4>{{$service->name}}</h4>

    <p>{{$service->text}}</p>

    <a class="btn btn-sm btn-primary mt-3" 
    href="{{ route('our_work') }}">Donate</a>

</div>

</div>

@endsection


