@extends('admin.dashboard')

@section('content')

<div class="page-content">

    <nav class="page-breadcrumb">
         <ol class="breadcrumb">
            <!-- <a href="{{route('add.admin')}}" class="btn btn-inverse-info"> Add Admin </a>             -->
        </ol>
    </nav>

          <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title"> {{ $user->name }} <span class="text-muted">( ID: {{ $user->id }})</span></h6> 
                <div class="table-responsive">
                  <table id="dataTableExample" class="table table-bordered table-hover table-striped item-center">
                    <thead>
                      <tr>
                        <th>ACC ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td> {{ $user->id }}</td>
                        <td> 
                            <img src="{{(!empty($user->photo)) ? url('upload/admin_images/'.$user->photo) : url('upload/no_image.jpg')}}" style="width:70px; height:40px;" alt="">    
                        </td>
                        <td> {{ $user->name }} </td>
                        <td> {{ $user->email }} </td>
                        <td> {{ $user->number }} </td>
                        <td> 
                            <!-- @foreach($user->roles as $role) -->
                              <!-- <span class="badge badge-bill bg-danger"> {{ $role->name }} </span> -->
                            <!-- @endforeach   -->
                            <span class="badge badge-bill bg-danger"> {{ $user->role }} </span>
                        </td>
                        <td>
                            <a href="{{route('edit.admin',$user->id)}}" class="btn btn-inverse-warning"> Edit </a>
                            <a href="{{route('delete.admin',$user->id)}}" class="btn btn-inverse-danger" id="delete"> Delete </a>
                        </td>
                      </tr>   
             
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>

@endsection