@extends ('admin.layouts.master')

@section('content')
<div class="container mt-5">
      <a href="/admin/partners/{{ $partner->id }}/edit" title=""><button type="button" class="mb-4 btn btn-success">Edit</button></a>

      <h1 class="text-center mb-5">{{ $partner->name }}</h1>
      <img  class="img-fluid" src="{{ asset('images/partners/'.$partner->image) }}" alt="">
      <hr>

        {!! $partner->description !!}
    <hr>
    <span><h4>Website link:</h4>
    <a href="{{$partner->link}}" target="_blank">{{$partner->link}}</a>
    </span>

    </div>

@endsection