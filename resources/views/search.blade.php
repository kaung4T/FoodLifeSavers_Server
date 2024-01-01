@extends('main_master2')

@section('content')


<div class="search_body">
<h3>Your search: <b>{{ $search }}</b></h3>
<span>Result: @if ($nothing !== null) {{ $nothing }} @else {{ $item_count }} @endif</span>

<div class="search_body_result">


@foreach ($service as $each_service)
<div href="{{ route('each_service', $each_service->id) }}" style="margin-right: 7px;margin-bottom: 25px;">
    <div class="card" style="width: 24rem;height:300px;">

    <div class="card-img-top" style="align-items:center;text-align:center;">
        <img class="" 
        style="object-fit: contain;width:100px;height:100px;" 
        src="{{ asset('storage/app/public/'.$each_service->file_path) }}" alt="">
    </div>
    
    <div class="card-body">
        <p class="card-text text-center">{{ $each_service->name }}</p>
        <p class="card-text">{{ Str::limit($each_service->text, 150, $end='...') }}</p>
        <a href="{{ route('each_service', $each_service->id) }}" style="margin-top: 10px;"
        class="btn btn-primary btn-sm float-end"> Read More <i class="fa fa-arrow-right ms-2"></i></a>
    </div>

    </div>
</div>


@endforeach



</div>

</div>


@endsection

