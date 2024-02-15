@extends('admin.dashboard')

@section('content')


<div class="page-content">




<div class="info_body mb-4">

<div class="card">
    <div class="card-body">

<div class="mb-4">
<h4>Update Website Info</h4>
</div>

<form action="{{ route('admin.info_update_store', $info_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Business Type</label>
        <div class="col-sm-7">
            <span><i class="bi bi-briefcase-fill web-info-icon text-muted"></i></span>
        <input name="business_type" type="text" class="form-control p-5 pt-2 pb-2 pr-0" value="{{ $info->business_type }}" maxlength="255" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Business Country</label>
        <div class="col-sm-7">
            <span><i class="bi bi-globe-central-south-asia web-info-icon text-muted"></i></span>
        <input name="business_country" type="text" class="form-control p-5 pt-2 pb-2 pr-0" value="{{ $info->business_country }}" maxlength="255" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Business Address 1</label>
        <div class="col-sm-7">
            <span><i class="bi bi-file-text-fill web-info-icon text-muted"></i></span>
        <input name="business_address1" type="text" class="form-control p-5 pt-2 pb-2 pr-0" value="{{ $info->business_address1 }}" maxlength="255" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label text-muted">Business Address 2</label>
        <div class="col-sm-7">
            <span><i class="bi bi-file-text-fill web-info-icon text-muted"></i></span>
            @if ($info->business_address2)
        <input name="business_address2" type="text" class="form-control p-5 pt-2 pb-2 pr-0" value="{{ $info->business_address2 }}" maxlength="255">
            @else
        <input name="business_address2" type="text" class="form-control p-5 pt-2 pb-2 pr-0" value=" - " maxlength="255">
            @endif
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Business Phone</label>
        <div class="col-sm-7">
            <span><i class="bi bi-telephone-fill web-info-icon text-muted"></i></span>
        <input name="business_phone" type="text" class="form-control p-5 pt-2 pb-2 pr-0" value="{{ $info->business_phone }}" maxlength="255" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Business Email</label>
        <div class="col-sm-7">
            <span><i class="bi bi-envelope-fill web-info-icon text-muted"></i></span>
        <input name="business_email" type="text" class="form-control p-5 pt-2 pb-2 pr-0" value="{{ $info->business_email }}" maxlength="255" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Business Website</label>
        <div class="col-sm-7">
            <span><i class="bi bi-browser-chrome web-info-icon text-muted"></i></span>
        <input name="business_website" type="text" class="form-control p-5 pt-2 pb-2 pr-0" value="{{ $info->business_website }}" maxlength="255" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Business Location</label>
        <div class="col-sm-7">
            <span><i class="bi bi-geo-alt-fill web-info-icon text-muted"></i></span>
        <input name="business_location" type="text" class="form-control p-5 pt-2 pb-2 pr-0" value="{{ $info->business_location }}" maxlength="255" required>
        </div>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" name="check_count_down" class="form-check-input" id="check_count_down" checked>
        <label class="form-check-label" for="check_count_down">Approved</label>
    </div>

        <button type="submit" class="btn btn-outline-primary mt-3 service_button">Update</button>

    </form>
    </div>
</div>

</div>







</div>


@endsection

