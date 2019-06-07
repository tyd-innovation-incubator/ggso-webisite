@extends('admin.layouts.master')

@section('content')
<div class="container my-5" style="background-color: white;" >
  <a href="/admin/contacts/edit" title=""><button type="button" class="m-4 btn btn-success">Edit</button></a>
  @if (Session::has('success'))
  <div class="float-right mt-4">
    <div class="alert alert-success text-centeralert-dismissible fade show" role="alert">
      <strong></strong> {{ Session::get('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
  @endif
  <h1>Contact Information</h1>
  <hr> 
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Type</th>
              <th>Content</th>

            </tr>
          </thead>
          <tbody>
           <tr>
            <th scope="row">Location:</th>
            <td>{!!  $contact->location !!}</td>
          </tr>
          <tr>
            <th scope="row">Phone:</th>
            <td>{{  $contact->phone }}</td>
          </tr>

          <tr>
            <th scope="row">Email Address:</th>
            <td>{{  $contact->email}}</td>
          </tr>
          <tr>
            <th scope="row">Facebook:</th>
            <td>{{  $contact->facebook}}</td>
          </tr>
                    <tr>
            <th scope="row">Twitter:</th>
            <td>{{  $contact->twitter }}</td>
          </tr>
           <tr>
             <th scope="row">LinkedIn:</th>
             <td>{{  $contact->linkedIn }}</td>
           </tr>
           <tr>
             <th scope="row">Open Hours:</th>
             <td>{{  $contact->hours }}</td>
           </tr>
           <tr>
             <th scope="row">Image:</th>
             <td> <img  class="img-responsive" src="{{asset('images/contacts/'.$contact->image)}}"> </td>
           </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection