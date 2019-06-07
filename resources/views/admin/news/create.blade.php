@extends ('admin.layouts.master')

@section('content')

<div class="container mt-5">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h4>Add </h4>
    </div>
    <div class="card-body">
      <form class="form-horizontal" action="/admin/news/store" method="POST" enctype="multipart/form-data">
       {{ csrf_field() }}

       <div class="form-group row">
        <label class="col-sm-2">Title</label>
        <div class="col-sm-10">
          <input id="inputHorizontalSuccess" type="text"  name="title" placeholder="Title here" class="form-control form-control-success">
          @if ($errors->has('name'))
          <span class="help-block">
            <strong class="text-danger">{{ $errors->first('name') }}</strong>
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
              <small>Hint: Image's size not greater than 2MB and shape  (840 X 360) of pixels</small>
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
          <textarea class="form-control my-editor" name="content" rows="10" placeholder="Description here"> </textarea>
          @if ($errors->has('content'))
          <span class="help-block">
            <strong class="text-danger">{{ $errors->first('content') }}</strong>
          </span>
          @endif
        </div>
      </div>
        <div class="form-group row">
          <label class="col-sm-2">Tag</label>
          <div class="col-sm-10">
            <div class="form-group">
              <select id="tag" name="tag" class="form-control" required>
                @foreach ($tags as $tag)
                  <option value="{{$tag->name}}">{{$tag->name}}</option>
                @endforeach
              </select>
              @if ($errors->has('status'))
                <span class="help-block">
              <strong class="text-danger">{{ $errors->first('status') }}</strong>
            </span>
              @endif
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2">Status</label>
          <div class="col-sm-10">
            <div class="form-group">
              <select id="status" name="status" class="form-control" required>
                <option value="1">Publish</option>
                <option value="0">Draft</option>
              </select>
              @if ($errors->has('status'))
                <span class="help-block">
              <strong class="text-danger">{{ $errors->first('status') }}</strong>
            </span>
              @endif
            </div>
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