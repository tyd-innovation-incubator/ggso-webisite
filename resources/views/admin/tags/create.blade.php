@extends ('admin.layouts.master')

@section('content')

<div class="container mt-5">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h4>Add </h4>
    </div>
    <div class="card-body">
      <form class="form-horizontal" action="/admin/tags/store" method="POST" enctype="multipart/form-data">
       {{ csrf_field() }}

       <div class="form-group row">
        <label class="col-sm-2">Name</label>
        <div class="col-sm-10">
           <input id="inputHorizontalSuccess" type="text" name="name"  class="form-control form-control-success">

         @if ($errors->has('name'))
         <span class="help-block">
          <strong class="text-danger">{{ $errors->first('name') }}</strong>
        </span>
        @endif
      </div>
    </div>
    <div class="form-group row">       
      <div class="col-sm-10 offset-sm-2">
        <input type="submit" value="Save" class="btn btn-primary">
      </div>
    </div>
  </form>
</div>
</div>
</div>

@endsection