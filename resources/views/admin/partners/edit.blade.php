@extends ('admin.layouts.master')

@section('content')


    <div class="container mt-5">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h4>Update</h4>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="/admin/partners/{{ $partner->id }}/save" method="POST"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-2">Name</label>
                        <div class="col-sm-10">
                            <input id="inputHorizontalSuccess" type="text" value="{{ $partner->name }}" name="name"
                                   class="form-control form-control-success">
                            @if ($errors->has('name'))
                                <span class="help-block">
                  <strong class="text-danger">{{ $errors->first('name') }}</strong>
              </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2">Website link</label>
                        <div class="col-sm-10">
                            <input id="inputHorizontalSuccess" type="text" value="{{ $partner->link }}" name="link"
                                   class="form-control form-control-success">
                            @if ($errors->has('link'))
                                <span class="help-block">
                  <strong class="text-danger">{{ $errors->first('link') }}</strong>
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
                            <small>Hint: Image's size not greater than 2MB and shape  (370 X 231) of pixels</small>
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
                        <label class="col-sm-2">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="description"
                                      rows="6">{{ $partner->description }} </textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                  <strong class="text-danger">{{ $errors->first('description') }}</strong>
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