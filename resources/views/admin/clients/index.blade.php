@extends ('admin.layouts.master')

@section('content')
<div class="container mt-5" style="background-color: white;">
    <a href="/admin/clients/create" title=""><button type="button" class="m-4 btn btn-primary">Add</button></a> 
    
    <div class="card">
        <div class="card-header">
          <h4>Clients List</h4><span class="float-right h3">Total Clients {{ count($clients) }}</span>
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
          <th>Date</th>
          <th>Image</th>
          <th>Action</th>
      </tr>
  </thead>
  <tbody>
    @foreach ($clients as $client)
    <tr>
      <td>{{ $client->created_at }}</td>

      <td><img  class="img-fluid" src="{{ asset('img/clients/'.$client->name) }}" width="100px" height="100px" alt="about-image"></td>
      <td>
        <span><a href="/admin/clients/{{ $client->id }}/destroy" title=""><button type="button" class="btn btn-sm btn-danger">Delete</button></a></span></td>

    </tr>
    @endforeach

</tbody>
</table>
</div>
</div>
</div>
</div>

@endsection