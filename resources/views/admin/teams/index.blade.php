@extends ('admin.layouts.master')

@section('content')
<div class="container mt-5" style="background-color: white;">
    <a href="/admin/teams/create" title=""><button type="button" class="m-4 btn btn-primary">Add</button></a> 
    <div class="card">
        <div class="card-header">
          <h4>Team Members List</h4>
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
          <th>ID</th>
          <th>Name</th>
          <th>Professional</th>
          <th>Action</th>
      </tr>
  </thead>
  <tbody>
    @foreach ($teams as $team)
    <tr>
      <td>{{ $team->id }}</td>
      <td>{{ $team->name }}</td>
      <td>{{ $team->occupation }}</td>

      <td>  <span class="pd-3"><a href="/admin/teams/{{ $team->id }}" title=""><button type="button" class="btn btn-sm btn-info">view</button></a></span> 
        <span><a href="/admin/teams/{{ $team->id }}/edit" title=""><button type="button" class="btn btn-sm btn-success">Edit</button></a></span> 
        <span><a href="/admin/teams/{{ $team->id }}/destroy" title=""><button type="button" class="btn btn-sm btn-danger">Delete</button></a></span></td>

    </tr>
    @endforeach

</tbody>
</table>
</div>
</div>
</div>
</div>

@endsection