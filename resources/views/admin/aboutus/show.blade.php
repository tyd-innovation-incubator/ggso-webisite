@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
  <a href="/admin/about-us/edit"><button type="button" class="mb-4 btn btn-success">Edit</button></a>
  @if (Session::has('success'))
  <div class="float-right">
    <div class="alert alert-success text-centeralert-dismissible fade show" role="alert">
      <strong></strong> {{ Session::get('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
  @endif
  <h1 class="text-center">About GGSO</h1>

  <img  class="img-fluid" src="{{ asset('images/company/'.$about->image) }}" alt="about image">
  <hr>

  {!! $about->overview !!}

  <hr>

  <h1>Mission</h1>
  <hr>
  {!! $about->mission !!}

  <hr>

  <h1>Vision</h1>
  <hr>
  {!! $about->vision !!}
</div>

@endsection