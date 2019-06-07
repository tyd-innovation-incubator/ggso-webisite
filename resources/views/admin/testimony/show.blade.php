@extends ('admin.layouts.master')

@section('content')
<div class="container mt-5">
  <a href="/admin/testimonies/{{ $testimony->id }}/edit" title=""><button type="button" class="mb-4 btn btn-success">Edit</button></a>

<hr>
      <h1>Name: {{   $testimony->name }}</h1><br>

      <h5>Occupation: {{   $testimony->occupation }}</h5><br>

      <img  class="img-fluid" src="{{ asset('images/testimonies/'.$testimony->image) }}" alt="">
      <hr>
      {!! $testimony->message !!}

</div>


@endsection