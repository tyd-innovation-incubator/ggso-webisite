@extends ('admin.layouts.master')

@section('content')
<div class="container mt-5" style="background-color: white;">
    <a href="/admin/faqs/create" title=""><button type="button" class="m-4 btn btn-primary">Add</button></a>
    <div class="card">
        <div class="card-header">
          <h4>Frequently Asked Questions List</h4>
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
          <th>Questions</th>
          <th>Action</th>
      </tr>
  </thead>
  <tbody>
    @foreach ($faqs as $faq)
    <tr>
      <td>{{ $faq->id }}</td>

      <td>{{ $faq->question }}</td>
      <td>  <span class="pd-3"><a href="/admin/faqs/{{ $faq->id }}" title=""><button type="button" class="btn btn-sm btn-info">view</button></a></span>
        <span><a href="/admin/faqs/{{ $faq->id }}/edit" title=""><button type="button" class="btn btn-sm btn-success">Edit</button></a></span>
       <span><button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal{{ $faq->id }}">Delete</button></span></td>

    </tr>
    @endforeach

</tbody>
</table>
</div>
</div>
</div>
</div>

  @foreach ($faqs as $faq)
<!-- Modal -->
<div id="myModal{{ $faq->id }}" class="modal fade" role="dialog">
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
         <a href="/admin/faqs/{{ $faq->id }}/destroy" title=""><button type="button" class="btn btn-md btn-danger">Yes</button></a>
        <button type="button" class="btn btn-md btn-warning" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection