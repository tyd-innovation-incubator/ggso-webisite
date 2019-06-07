@extends ('admin.layouts.master')

@section('content')
<div class="container mt-5">
      <a href="/admin/services/{{ $service->id }}/edit" title=""><button type="button" class="mb-4 btn btn-success">Edit</button></a>

      <h1 class="text-center mb-5">{{ $service->name }}</h1>
      <img  class="img-fluid" src="{{ asset('images/services/'.$service->image) }}" alt="">
      <hr>

        {!! $service->description !!}
    </div>

@endsection