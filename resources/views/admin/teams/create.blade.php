@extends ('admin.layouts.master')

@section('content')

<div class="container mt-5">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h4>Add </h4>
    </div>
    <div class="card-body">
      <form class="form-horizontal" action="/admin/teams/store" method="POST" enctype="multipart/form-data">
       {{ csrf_field() }}
       <div class="form-group row">
        <label class="col-sm-2">Name</label>
        <div class="col-sm-10">
          <input id="inputHorizontalSuccess" type="text"  name="name" placeholder="Name here" class="form-control form-control-success">
          @if ($errors->has('name'))
          <span class="help-block">
            <strong class="text-danger">{{ $errors->first('name') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2">Professional</label>
        <div class="col-sm-10">
          <input id="inputHorizontalSuccess" type="text"  name="occupation" placeholder="Professional here" class="form-control form-control-success">
          @if ($errors->has('occupation'))
          <span class="help-block">
            <strong class="text-danger">{{ $errors->first('occupation') }}</strong>
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
              <small>Hint:  Image's size not greater than 2MB  and dimension of 182 X 182 pixels </small>
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
        <label class="col-sm-2">Facebook Link</label>
        <div class="col-sm-10">
          <input id="inputHorizontalSuccess" type="text"  name="facebook" placeholder="link here" class="form-control form-control-success">
          @if ($errors->has('facebook'))
          <span class="help-block">
            <strong class="text-danger">{{ $errors->first('facebook') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2">Twitter Link</label>
        <div class="col-sm-10">
          <input id="inputHorizontalSuccess" type="text"  name="twitter" placeholder="Link here" class="form-control form-control-success">
          @if ($errors->has('twitter'))
          <span class="help-block">
            <strong class="text-danger">{{ $errors->first('twitter') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2">linkedIn Link</label>
        <div class="col-sm-10">
          <input id="inputHorizontalSuccess" type="text"  name="linkedin" placeholder="Link here" class="form-control form-control-success">
          @if ($errors->has('linkedin'))
          <span class="help-block">
            <strong class="text-danger">{{ $errors->first('linkedin') }}</strong>
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