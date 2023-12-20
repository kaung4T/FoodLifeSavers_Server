@extends('main_master2')

@section('content')


<div class="search_body">
<h3>Your search: <b>{{ $search }}</b></h3>
<span>Result: @if ($nothing !== null) {{ $nothing }} @else {{ $item_count }} @endif</span>

<div class="search_body_result">
    @foreach ($product as $each_product)
        {{ $each_product->name }}
    @endforeach
</div>

</div>


@endsection

