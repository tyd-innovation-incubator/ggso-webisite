@extends ('admin.layouts.master')


@section ('content')

<div class="container mt-5">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h4>Edit  User </h4>
    </div>
    <div class="card-body">
      <form class="form-horizontal" action="/admin/users/{{ $admin->id }}/save" method="POST">
        {{ csrf_field() }}
        
        <div class="form-group row">
          <label class="col-sm-2">username</label>
          <div class="col-sm-10">
            <input id="inputHorizontalSuccess" type="text" placeholder="Username here" value="{{ $admin->name }}" name="username" class="form-control form-control-success">
            @if ($errors->has('username'))
            <span class="help-block">
              <strong class="text-danger">{{ $errors->first('username') }}</strong>
            </span>
            @endif
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2">Email</label>
          <div class="col-sm-10">
            <input id="inputHorizontalSuccess" type="email" placeholder="Email Address here"  value="{{ $admin->email }}" name="email" class="form-control form-control-success">
            @if ($errors->has('email'))
            <span class="help-block">
              <strong class="text-danger">{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2">password</label>
          <div class="col-sm-10">
            <input id="inputHorizontalSuccess" type="password" name="password" class="form-control form-control-success">
            @if ($errors->has('password'))
            <span class="help-block">
              <strong class="text-danger">{{ $errors->first('password') }}</strong>
            </span>
            @endif
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2">Confirm password</label>
          <div class="col-sm-10">
            <input id="inputHorizontalSuccess" type="password" name="password_confirmation" class="form-control form-control-success">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2">Role</label>
          <div class="col-sm-10">
            <div class="form-group">
             <select id="status" name="status" class="form-control" required>
              <option value="1">Super Admin</option>
              <option value="0">Admin</option>
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