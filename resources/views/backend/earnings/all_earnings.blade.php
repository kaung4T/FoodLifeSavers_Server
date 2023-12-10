@extends('admin.dashboard')

@section('content')

<div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                    <a href="{{route('add.earnings')}}" class="btn btn-inverse-info"> Add Property Type </a>
            </ol>
        </nav>

          <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title"> All Earning </h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table table-bordered table-hover table-striped item-center">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Earning Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($earnings as $key => $item)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td> {{ $item->earnings_name }} </td>
                        <td>
                            <a href="{{route('edit.earnings',$item->id)}}" class="btn btn-inverse-warning"> Edit </a>
                            <a href="{{route('delete.earnings',$item->id)}}" class="btn btn-inverse-danger" id="delete"> Delete </a>
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