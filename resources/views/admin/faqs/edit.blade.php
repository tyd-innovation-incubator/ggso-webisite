@extends ('admin.layouts.master')

@section('content')


<div class="container mt-5">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h4>Update Details</h4>
    </div>
    <div class="card-body">
      <form class="form-horizontal" action="/admin/faqs/{{ $faq->id }}/save" method="POST" enctype="multipart/form-data">
       {{ csrf_field() }}
       <div class="form-group row">
        <label class="col-sm-2">Name</label>
        <div class="col-sm-10">
         <input id="inputHorizontalSuccess" type="text" value="{{ $faq->question }}" name="question"  class="form-control form-control-success">
         @if ($errors->has('question'))
         <span class="help-block">
          <strong class="text-danger">{{ $errors->first('question') }}</strong>
        </span>
        @endif
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2">Answer</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="answer" rows="10">{{ $faq->answer }} </textarea>
        @if ($errors->has('answer'))
        <span class="help-block">
          <strong class="text-danger">{{ $errors->first('answer') }}</strong>
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