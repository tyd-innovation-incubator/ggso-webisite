@extends ('admin.layouts.master')

@section('content')
<div class="container mt-5">
      <a href="/admin/teams/{{ $team->id }}/edit" title=""><button type="button" class="mb-4 btn btn-success">Edit</button></a>

      <h1>{{ $team->name }}</h1>
      <h3>{{ $team->occupation }}</h3>
      <div class="row">
        <div class="col-md-6">
               <img class="img-fluid" src="{{ asset('images/teams/'.$team->image) }}" width="300" height="200"  alt="image-name">
        </div>
          <div class="col-md-6">

        <h3>Social Network Links</h3>
              <hr>
        <p>Facebook Account:<span> <a href="{{ $team->facebook }}" title="">  {{ $team->facebook }}</a></span></p><br>
        <p>Twitter Account:<span><a href="{{ $team->twitter }}" title="">  {{ $team->twitter }}</a></span></p><br>
         <p>LinkedIn Account:<span><a href="{{ $team->linkedin }}" title="">  {{ $team->linkedin }}</a></span></p>
         </div>
      </div>


@endsection