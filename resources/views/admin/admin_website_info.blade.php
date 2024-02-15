@extends('admin.dashboard')

@section('content')


<div class="page-content">



<div class="info_body mb-4">

<div class="card">
    <div class="card-body">

<div class="mb-4">
<h4>Add Website Info</h4>
</div>

<form action="{{ route('admin.info_store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Business Type</label>
        <div class="col-sm-7">
            <span><i class="bi bi-briefcase-fill web-info-icon text-muted"></i></span>
        <input name="business_type" type="text" class="form-control p-5 pt-2 pb-2 pr-0" maxlength="255" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Business Country</label>
        <div class="col-sm-7">
            <span><i class="bi bi-globe-central-south-asia web-info-icon text-muted"></i></span>
        <input name="business_country" type="text" class="form-control p-5 pt-2 pb-2 pr-0" maxlength="255" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Business Address 1</label>
        <div class="col-sm-7">
            <span><i class="bi bi-file-text-fill web-info-icon text-muted"></i></span>
        <input name="business_address1" type="text" class="form-control p-5 pt-2 pb-2 pr-0" maxlength="255" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label text-muted">Business Address 2</label>
        <div class="col-sm-7">
            <span><i class="bi bi-file-text-fill web-info-icon text-muted"></i></span>
        <input name="business_address2" type="text" class="form-control p-5 pt-2 pb-2 pr-0" maxlength="255">
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Business Phone</label>
        <div class="col-sm-7">
            <span><i class="bi bi-telephone-fill web-info-icon text-muted"></i></span>
        <input name="business_phone" type="text" class="form-control p-5 pt-2 pb-2 pr-0" maxlength="255" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Business Email</label>
        <div class="col-sm-7">
            <span><i class="bi bi-envelope-fill web-info-icon text-muted"></i></span>
        <input name="business_email" type="text" class="form-control p-5 pt-2 pb-2 pr-0" maxlength="255" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Business Website</label>
        <div class="col-sm-7">
            <span><i class="bi bi-browser-chrome web-info-icon text-muted"></i></span>
        <input name="business_website" type="text" class="form-control p-5 pt-2 pb-2 pr-0" maxlength="255" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-5 col-form-label">Business Location</label>
        <div class="col-sm-7">
            <span><i class="bi bi-geo-alt-fill web-info-icon text-muted"></i></span>
        <input name="business_location" type="text" class="form-control p-5 pt-2 pb-2 pr-0" maxlength="255" required>
        </div>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" name="check_count_down" class="form-check-input" id="check_count_down" checked>
        <label class="form-check-label" for="check_count_down">Approved</label>
    </div>

        <button type="submit" class="btn btn-outline-primary mt-3 service_button">Submit</button>

    </form>
    </div>
</div>

</div>







<div class="customize_web_info_body">

<div class="card">
    <div class="card-body">

    <div class="mb-4">
<h4>Customize Web-Info</h4>
    </div>

    <div class="table-responsive plan_table">
    <!-- <table id="dataTableExample" class="table table-dark table-image mb-2"> -->
    <table id="" class="display table table-dark table-image mb-2">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col" class="text-center">Type</th>
        <th scope="col" class="text-center">Country</th>
        <th scope="col" class="text-center">Address-1</th>
        <th scope="col" class="text-center">Address-2</th>
        <th scope="col" class="text-center">Phone</th>
        <th scope="col" class="text-center">Email</th>
        <th scope="col" class="text-center">Website</th>
        <th scope="col" class="text-center">Location</th>
        <th scope="col" class="text-center">Approved</th>
        <th scope="col" class="text-center"></th>
        <th scope="col" class="text-center"></th>
        </tr>
    </thead>
    <tbody>
        
    <?php $i=1 ?>

        @foreach ($info as $each_info)

        <tr>
      <th scope="row"> {{ $i }} </th>
                <td class="text-center">{{ Str::limit($each_info->business_type, 25, $end='...') }}</td>
                <td class="text-center">{{ $each_info->business_country }}</td>
                <td class="text-center">{{ Str::limit($each_info->business_address1, 25, $end='...') }}</td>
                    @if ($each_info->business_address2)
                <td class="text-center">{{ Str::limit($each_info->business_address2, 25, $end='...') }}</td>
                    @else
                <td class="text-center"> - </td>
                    @endif
                <td class="text-center">{{ $each_info->business_phone }}</td>
                <td class="text-center">{{ $each_info->business_email }}</td>
                <td class="text-center">{{ Str::limit($each_info->business_website, 25, $end='...') }}</td>
                <td class="text-center"> {{ Str::limit($each_info->business_location, 25, $end='...') }} </td>
                <td class="text-center"> {{ $each_info->business_approved }} </td>

                <td><a href="{{ route('admin.info_update', $each_info->id)}}" class="btn btn-sm btn-outline-primary">Edit</a></td>
                <td>
                    <form action="{{ route('admin.info_delete', $each_info->id)}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
      
    </tr>
        
    <?php $i++ ?>

        @endforeach

                    </tbody>
                </table>
            </div>


            <div class="table-responsive mobile_plan_table">
    <!-- <table id="dataTableExample" class="table table-dark table-image mb-2"> -->
    <table id="" class="display table table-dark table-image mb-2">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col" class="text-center">Type</th>
            <th scope="col" class="text-center">Approved</th>
            <th scope="col" class="text-center"></th>
            <th scope="col" class="text-center"></th>
        </tr>
    </thead>
    <tbody>
        
    <?php $i=1 ?>

        @foreach ($info as $each_info)

        <tr>
      <th scope="row"> {{ $i }} </th>
                <td class="text-center">{{ $each_info->business_type }}</td>
                <td class="text-center"> {{ $each_info->business_approved }} </td>
                <td><a href="" class="btn btn-sm btn-outline-primary">Edit</a></td>
                <td>
                    <form action="{{ route('admin.info_delete', $each_info->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
      
    </tr>
        
    <?php $i++ ?>

        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>



                <!-- display table -->
                <script src="{{asset('assets/admin/js/table_display.js')}}"></script>


</div>


@endsection

