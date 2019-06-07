@extends('admin.layouts.master')


@section('content')
<div class="container mt-5" style="background-color: white;">
  <a href="{{ route('add_admin') }}" title=""><button type="button" class="m-4 btn btn-primary">Add</button> </a>
        
              <div class="card">
                <div class="card-header">
                  <h4 class="pb-3">Admin Users List</h4>
                           @if (Session::has('success'))
      <div class="float-right">
        <div class="alert alert-success text-centeralert-dismissible fade show" role="alert">
          <strong></strong> {{ Session::get('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        </div>
      </div>
      @endif
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($admins as $admin)
                        <tr>
                          <th scope="row">{{ $admin->id }}</th>
                          <td>{{ $admin->name }}</td>
                          <td>{{ $admin->email }}</td>
                          <td>{{ $admin->role }}</td>
                          <td>  <span class="pd-3"><a href="/admin/users/{{ $admin->id }}" title=""><button type="button" class="btn btn-sm btn-success">Edit</button></a></span> 
                           <span><button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal{{ $admin->id }}">Delete</button></span></td>
                        </tr>
                        @endforeach 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
       </div>

  @foreach($admins as $admin)
<!-- Modal -->
<div id="myModal{{ $admin->id }}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <h3>Are you sure you want to delete?</h3>
      </div>
      <div class="modal-footer">
         <a href="/admin/users/{{ $admin->id }}/destroy" title=""><button type="button" class="btn btn-md btn-danger">Yes</button></a>
        <button type="button" class="btn btn-md btn-warning" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection