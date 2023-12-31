@extends('main_master2')

@section('content')


<div class="search_body">
<h3>Your search: <b>{{ $search }}</b></h3>
<span>Result: @if ($nothing !== null) {{ $nothing }} @else {{ $item_count }} @endif</span>

<div class="search_body_result">


@foreach ($service as $each_service)
<a href="{{ route('each_service', $each_service->id) }}" style="margin-right: 7px;margin-bottom:10px">
    <div class="card" style="width: 24rem;">

    <div class="card-img-top" style="align-items:center;text-align:center;">
        <img class="" 
        style="object-fit: contain;width:100px;height:100px;" 
        src="{{ asset('storage/app/public/'.$each_service->file_path) }}" alt="">
    </div>
    
    <div class="card-body">
        <p class="card-text text-center">{{ $each_service->name }}</p>
        <p class="card-text">{{ $each_service->text }}</p>
    </div>
    </div>
</a>


@endforeach



</div>

</div>


@endsection

