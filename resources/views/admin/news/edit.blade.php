@extends ('admin.layouts.master')

@section('content')


                   <div class="container mt-5">
                <div class="card">
                  <div class="card-header d-flex align-items-center">
                    <h4>Update</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal" action="/admin/news/{{ $new->id }}/save" method="POST" enctype="multipart/form-data">
                         {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-sm-2">Title </label>
                        <div class="col-sm-10">
                          <input id="inputHorizontalSuccess" type="text" value="{{ $new->title }}" name="title"  class="form-control form-control-success">
                           @if ($errors->has('title'))
              <span class="help-block">
                  <strong class="text-danger">{{ $errors->first('title') }}</strong>
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
                        <label class="col-sm-2">Content</label>
                        <div class="col-sm-10">
                          <textarea class="form-control my-editor" name="content" rows="6">{{ $new->content }} </textarea>
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
                          <input type="submit" value="Update" class="btn btn-primary">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

@endsection