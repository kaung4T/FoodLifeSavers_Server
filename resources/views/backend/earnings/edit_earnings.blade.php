@extends('admin.dashboard')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
        <div class="row profile-body">
          <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
    
        <div class="card">
        <div class="card-body">

        <h6 class="card-title"> Edit Earning </h6>

        <form id="myForm" action="{{ route('update.earnings') }}" method="POST" class="forms-sample">
            @csrf
            <input type="hidden" name="id" value="{{ $earnings->id }}">
            <div class="form-group mb-3">
                <label for="earnings_name" class="form-label"> Earning Name </label>
                <input type="text" name="earnings_name" id="earnings_name" class="form-control" value="{{$earnings->earnings_name}}">
            </div>

            <button type="submit" class="btn btn-primary me-2"> Save Changes </button>
        </form>

        </div>
        </div>
             
        </div>
          </div>         
        </div>

        </div>

        <script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                earnings_name: {
                    required : true,
                },                 
            },
            messages :{
                earnings_name: {
                    required : 'Please Enter Earning Name',
                }, 
                 
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>

@endsection 