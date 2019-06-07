@extends('admin.layouts.master')

@section('content')
<div class="container my-5" style="background-color: white;">
    <a href="/admin/home/contents/{{ $homecontent->id }}/edit" title=""><button type="button" class="m-4 btn btn-success">Edit</button></a>
    @if (Session::has('success'))
    <div class="float-right mt-3">
        <div class="alert alert-success text-centeralert-dismissible fade show" role="alert">
          <strong></strong> {{ Session::get('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@endif  
<div class="card">
  <div class="card-header">
    <h4>Home Content Information</h4>
</div>
<div class="card-body">
    <h4>{{ $homecontent->title }}</h4>
    <img  class="img-fluid" src="{{ asset('images/home/'.$homecontent->image) }}" alt="">
    <hr>


    {!! $homecontent->content !!}
</div>
</div>
</div>

@endsection