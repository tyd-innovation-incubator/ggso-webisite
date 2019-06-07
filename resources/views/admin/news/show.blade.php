@extends ('admin.layouts.master')

@section('content')
<div class="container mt-5">
      <a href="/admin/news/{{ $new->id }}/edit" title=""><button type="button" class="mb-4 btn btn-success">Edit</button></a>

      <h1 class="text-center mb-5">{{ $new->title }}</h1>
      <img  class="img-fluid" src="{{ asset('images/news/'.$new->image) }}" alt="">
      <hr>

        {!! $new->content !!}
    <span><h3>Tag:</h3>{{$new->tag}}</span>
   <span> <h3>Status:</h3> @if($new->status == 1) Published @else Draft @endif </span>
    </div>

@endsection