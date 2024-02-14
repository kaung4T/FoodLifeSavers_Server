@extends('admin.dashboard')

@section('content')

<div class="page-content">



<div class="update_plan mb-4">


<div class="mb-4">
    <a href="{{ route('admin.plan') }}"><i class="bi bi-arrow-left"></i> Back</a>
    </div>


<div class="card">
    <div class="card-body">

<div class="mb-4">
<h4>Update Donation Plan</h4>
</div>

<form action="{{ route('admin.plan_update_store', $donation_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Plan Type</label>
        <div class="col-sm-7 ">
            <select id="plan" name="plan_type" class="account_country form-control select-box" value="{{ $donation->plan_type }}" required>
                    @if ($donation->plan_type == "Daily Plan")
                        <option value="Daily Plan" selected="selected">Daily Plan</option>
                    @else
                        <option value="Daily Plan">Daily Plan</option>
                    @endif

                    @if ($donation->plan_type == "Monthly Plan")
                        <option value="Monthly Plan" selected="selected">Monthly Plan</option>
                    @else
                        <option value="Monthly Plan">Monthly Plan</option>
                    @endif

                    @if ($donation->plan_type == "Advanced Plan")
                        <option value="Advanced Plan" selected="selected">Advanced Plan</option>
                    @else
                        <option value="Advanced Plan">Advanced Plan</option>
                    @endif
            </select>
            <div class="form-text">Please contact developers to add new more plans!</div>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Plan Info</label>
        <div class="col-sm-7">
        <input name="plan_text" type="text" class="form-control" value="{{ $donation->plan_info }}" maxlength="255" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Amount</label>
        <div class="col-sm-7">
        <input name="plan_amount" type="number" class="form-control" value="{{ $donation->amount }}" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Discount</label>
        <div class="col-sm-7">
        <input name="plan_discount" type="number" class="form-control">
        </div>
    </div>

        <button type="submit" class="btn btn-outline-primary mt-3 service_button">Update</button>

    </form>

            </div>

  
        </div>
    </div>



</div>


@endsection
