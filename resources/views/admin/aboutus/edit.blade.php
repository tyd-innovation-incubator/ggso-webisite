@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h4>Update About Us Details</h4>
    </div>
    <div class="card-body">
      <form class="form-horizontal" action="/admin/about-us/save/{{ $about->id }}" method="POST" enctype="multipart/form-data">
       {{ csrf_field() }}
       <div class="form-group row">
        <label class="col-sm-2">Image</label>
        <div class="col-sm-10">
          <div class="input-group">
            <span class="input-group-btn">
              <span class="btn  btn-file btn-secondary">
                Browse… <input type="file" name ="image" id="image">
              </span>
              <small>Hint: Image's size not greater than 2MB </small>
            </span>
            @if ($errors->has('image'))
            <span class="help-block">
              <strong class="text-danger">{{ $errors->first('image') }}</strong>
            </span>
            @endif
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2">Content</label>
        <div class="col-sm-10">
          <textarea class="form-control my-editor" name="overview" placeholder="content here" rows="10">{{ $about->overview }} </textarea>
          @if ($errors->has('overview'))
          <span class="help-block">
            <strong class="text-danger">{{ $errors->first('overview') }}</strong>
          </span>
          @endif
        </div>
      </div>
        <div class="form-group row">
          <label class="col-sm-2">Mission</label>
          <div class="col-sm-10">
            <textarea class="form-control my-editor" name="mission" placeholder="content here" rows="10">{{ $about->mission }} </textarea>
            @if ($errors->has('mission'))
              <span class="help-block">
            <strong class="text-danger">{{ $errors->first('mission') }}</strong>
          </span>
            @endif
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2">Vision</label>
          <div class="col-sm-10">
            <textarea class="form-control my-editor" name="vision" placeholder="content here" rows="10">{{ $about->vision }} </textarea>
            @if ($errors->has('vision'))
              <span class="help-block">
            <strong class="text-danger">{{ $errors->first('vision') }}</strong>
          </span>
            @endif
          </div>
        </div>
      <div class="form-group row">       
        <div class="col-sm-10 offset-sm-2">
          <input type="submit" value="Update" class="btn btn-primary">
        </div>
      </div>
    </form>
  </div>
</div>
</div>

@endsection