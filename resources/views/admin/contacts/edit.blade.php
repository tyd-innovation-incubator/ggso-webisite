@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h4>Contact Information</h4>
    </div>
    <div class="card-body">

      <form class="form-horizontal" method="post" action="/admin/contacts/save/{{ $contact->id }}" enctype="multipart/form-data">
       {{ csrf_field() }}
       <div class="form-group row">
        <label class="col-sm-2">Address</label>
        <div class="col-sm-10">
         <input id="inputHorizontalSuccess" type="text" value="{{ $contact->location }}" name="location" class="form-control form-control-success" required>
         @if ($errors->has('location'))
         <span class="help-block">
          <strong class="text-danger">{{ $errors->first('location') }}</strong>
        </span>
        @endif

      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2">Phone</label>
      <div class="col-sm-10">
        <input id="inputHorizontalSuccess" type="text" value="{{ $contact->phone }}" name="phone" class="form-control form-control-success" required>
        @if ($errors->has('phone'))
        <span class="help-block">
          <strong class="text-danger">{{ $errors->first('phone') }}</strong>
        </span>
        @endif
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2">Email</label>
      <div class="col-sm-10">
        <input id="inputHorizontalSuccess" type="email" value="{{ $contact->email }}" name="email" class="form-control form-control-success" required>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2">Facebook Link</label>
      <div class="col-sm-10">
        <input id="inputHorizontalSuccess" type="text" value="{{ $contact->facebook }}" name="facebook" class="form-control form-control-success" required>
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
        <input id="inputHorizontalSuccess" type="text" value="{{ $contact->twitter }}" name="twitter" class="form-control form-control-success" required>
        @if ($errors->has('twitter'))
        <span class="help-block">
          <strong class="text-danger">{{ $errors->first('twitter') }}</strong>
        </span>
        @endif
      </div>
    </div>
        <div class="form-group row">
          <label class="col-sm-2">LinkedIn Link</label>
          <div class="col-sm-10">
            <input id="inputHorizontalSuccess" type="text" value="{{ $contact->linkedIn }}" name="linkedIn" class="form-control form-control-success" required>
            @if ($errors->has('linkedIn'))
              <span class="help-block">
          <strong class="text-danger">{{ $errors->first('linkedIn') }}</strong>
        </span>
            @endif
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2">Open Hours</label>
          <div class="col-sm-10">
            <input id="inputHorizontalSuccess" type="text" value="{{ $contact->hours }}" name="hours" class="form-control form-control-success" required>
            @if ($errors->has('hours'))
              <span class="help-block">
          <strong class="text-danger">{{ $errors->first('hours') }}</strong>
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
                Browse… <input type="file" name="image" id="image">
              </span>
              <small>Hint: Image's size not greater than 2MB and shape  (370 X 428) of pixels</small>
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
      <div class="col-sm-10 offset-sm-2">
        <input type="submit" value="Update" class="btn btn-primary">
      </div>
    </div>
  </form>
</div>
</div>

</div>

@endsection