@extends('admin.layouts.master')


@section('content')
<div class="container mt-5" style="background-color: white;">
  <div class="card mx-auto my-auto">
    <div class="card-header">
      <h1 class="text-center">GGSO ADMIN PANEL</h1>
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
    </div>
    <div class="card-body">
       <p class="text-center my-5 " style="font-size: 30px;">WELCOME TO GGSO DASHBOARD USE THE LEFT NAVIGATION LINKS TO ACCESS YOUR INFORMATION </p>
      </div>
    </div>
  </div>

  @endsection