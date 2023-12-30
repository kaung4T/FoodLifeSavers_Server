@extends('main_master2')

@section('content')


<div class="search_body">
<h3>Your search: <b>{{ $search }}</b></h3>
<span>Result: @if ($nothing !== null) {{ $nothing }} @else {{ $item_count }} @endif</span>

<div class="search_body_result">
    @foreach ($service as $each_service)
        {{ $each_service->name }}
        <br>
        <img src="{{ asset('storage/app/public/'.$each_service->file_path) }}" alt="">
    @endforeach
</div>

</div>


@endsection

