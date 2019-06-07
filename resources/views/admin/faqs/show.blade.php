@extends ('admin.layouts.master')

@section('content')
<div class="container mt-5">
  <a href="/admin/faqs/{{ $faq->id }}/edit" title=""><button type="button" class="mb-4 btn btn-success">Edit</button></a>
    <br><br>
      <span style="font-size: 30px;"><b>Name:</b>{{   $faq->question }}</span><br>
      <hr>
      {!! $faq->answer !!}

</div>


@endsection