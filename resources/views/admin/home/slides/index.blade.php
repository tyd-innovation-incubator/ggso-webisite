@extends('admin.layouts.master')



@section('content')
    <div class="container my-5" style="background-color: white;">
        <a href="/admin/slides/create" title="" style="display: none;"><button type="button" class="m-4 btn btn-primary">Add</button></a>

<div class="card">
    <div class="card-header">
      <h4>Sliding Images</h4>
  </div>
    @if (Session::has('success'))
        <div class="float-right mt-3">
            <div class="alert alert-success text-centeralert-dismissible fade show" role="alert">
                <strong></strong> {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
  <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>First Slogan</th>
              <th>Image</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($slides as $image)

        <tr>
          <th scope="row">{{$image->id }}</th>
          <th scope="row">{{ $image->slogan_1 }}</th>
          <td><img src="{{ asset('images/slides/'.$image->image) }}" width="100" height="100" alt="image here"></td>
            <td>  <span class="pd-3"><a href="/admin/slides/{{ $image->id }}" title=""><button type="button" class="btn btn-sm btn-info">view</button></a></span>
                <span><a href="/admin/slides/{{ $image->id }}/edit" title=""><button type="button" class="btn btn-sm btn-success">Edit</button></a></span>
                <span><button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal{{ $image->id }}" style="display: none;">Delete</button></span>
       </td>
   </tr>
   @endforeach 
</tbody>
</table>
</div>
</div>
</div>    
</div>

@foreach($slides as $image)
    <!-- Modal -->
    <div id="myModal{{ $image->id }}" class="modal fade" role="dialog">
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
                    <a href="/admin/slides/{{ $image->id }}/delete" title=""><button type="button" class="btn btn-md btn-danger">Yes</button></a>
                    <button type="button" class="btn btn-md btn-warning" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection