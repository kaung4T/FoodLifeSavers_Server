@extends('admin.dashboard')

@section('content')



<div class="page-content">



<div class="update_count_down_body mb-4">

<div class="mb-4">
    <a href="{{ route('admin.count_down') }}"><i class="bi bi-arrow-left"></i> Back</a>
    </div>


<div class="card">
    <div class="card-body">

<div class="mb-4">
<h4>Update Count-Down</h4>
</div>

<form action="{{ route('admin.count_down_update_store', $count_down_id) }}" method="POST" enctype="multipart/form-data">
        @csrf

<div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">End Date</label>
        <div class="col-sm-7">
        <input type="date" id="birthday" name="end_date" class="form-control" value="{{ $count_down->end_date }}" required>
        <!-- <input name="end_date" type="number" class="form-control" placeholder="Enter End-Date" value="{{ $count_down->end_date }}"> -->
        </div>
    </div>

    <div class="mb-3 form-check">
        @if ($count_down->approved)
        <input type="checkbox" name="check_count_down" class="form-check-input" id="check_count_down" checked>
        @else
        <input type="checkbox" name="check_count_down" class="form-check-input" id="check_count_down">
        @endif
        <label class="form-check-label" for="check_count_down">Approved</label>
    </div>

        <button type="submit" class="btn btn-outline-primary mt-3 service_button">Submit</button>

    </form>


            </div>
        </div>
    
    
    </div>



</div>


@endsection
