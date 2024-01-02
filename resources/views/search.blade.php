@extends('main_master2')

@section('content')


<div class="search_body">
<h3>Your search: <b>{{ $search }}</b></h3>
<span>Result: @if ($nothing !== null) {{ $nothing }} @else {{ $item_count }} @endif</span>

<div class="search_body_result">



<div class="row g-4">
    @foreach ($service as $each_service)
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item bg-white p-5">
            <div class="text-center">
                <img class="img-fluid mb-4" src="{{ asset('storage/app/public/'.$each_service->file_path) }}" alt="">
            <h5 class="mb-3 text-primary"> {{ $each_service->name }} </h5>
            </div>
            
            <p class="short_description"> {{ $each_service->text }} </p>
            <a href="{{ route('each_service', $each_service->id) }}" class="btn btn-primary btn-sm float-end"> Read More <i class="fa fa-arrow-right ms-2"></i></a>
        </div>
    </div>
    @endforeach
</div>



</div>

</div>


@endsection

