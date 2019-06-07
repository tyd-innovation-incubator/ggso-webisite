@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h4>Add Image with Caption</h4>
    </div>
    <div class="card-body">
        <form class="form-horizontal" action="/admin/slides/store" method="POST" enctype="multipart/form-data">
             {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2">First Slogan</label>
                <div class="col-sm-10">
                    <input id="inputHorizontalSuccess" type="text"  name="slogan_1"  class="form-control form-control-success" required>
                    @if ($errors->has('slogan_1'))
                        <span class="help-block">
                  <strong class="text-danger">{{ $errors->first('slogan_1') }}</strong>
              </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2">Second Slogan</label>
                <div class="col-sm-10">
                    <input id="inputHorizontalSuccess" type="text"  name="slogan_2"  class="form-control form-control-success" required>
                    @if ($errors->has('slogan_2'))
                        <span class="help-block">
                  <strong class="text-danger">{{ $errors->first('slogan_2') }}</strong>
              </span>
                    @endif
                </div>
            </div>
      <div class="form-group row">
        <label class="col-sm-2">Image</label>
        <div class="col-sm-10">
          <div class="input-group">
            <span class="input-group-btn">
              <span class="btn  btn-file btn-secondary">
                Browse… <input type="file" name ="image" id="image">
            </span>
            <small>Hint:  Image's size not greater than 2MB and Dimension of 1920px width and 761px Height</small>
        </span>
  </span>
</div>
@if ($errors->has('image'))
        <span class="help-block">
          <strong class="text-danger">{{ $errors->first('image') }}</strong>
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