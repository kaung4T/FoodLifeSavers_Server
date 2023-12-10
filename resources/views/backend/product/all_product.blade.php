@extends('admin.dashboard')

@section('content')

<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						 <a href="{{route('add.product')}}" class="btn btn-inverse-info"> Add Property Type </a>
					</ol>
				</nav>

          <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title"> All Products </h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table table-bordered table-hover table-striped item-center">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Product Icon</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($types as $key => $item)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td> {{ $item->product_name }} </td>
                        <td> {{ $item->product_icon }} </td>
                        <td>
                          @if(Auth::user()->can('edit.type'))
                            <a href="{{route('edit.product',$item->id)}}" class="btn btn-inverse-warning"> Edit </a>
                          @endif

                          @if(Auth::user()->can('delete.type'))
                            <a href="{{route('delete.product',$item->id)}}" class="btn btn-inverse-danger" id="delete"> Delete </a>
                          @endif
                        </td>
                      </tr>   
                         @endforeach                
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>






@endsection