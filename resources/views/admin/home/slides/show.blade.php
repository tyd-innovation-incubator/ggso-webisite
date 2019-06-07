@extends ('admin.layouts.master')

@section('content')
<div class="container mt-5">
      <a href="/admin/slides/{{ $slide->id }}/edit" title=""><button type="button" class="mb-4 btn btn-success">Edit</button></a>

      <h1 class="text-center mb-5">{{ $slide->name }}</h1>
      <img  class="img-fluid" src="{{ asset('images/slides/'.$slide->image) }}" alt="">
      <hr>
        <h1>First Slogan</h1>
        {{ $slide->slogan_1 }}
    <hr>
    <h1>Second Slogan</h1>
    {{ $slide->slogan_2 }}
    </div>

@endsection