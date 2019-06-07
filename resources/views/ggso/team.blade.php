@extends('ggso.layouts.masters')

@section('content')
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h3>Our Team</h3>
            </div>
        </div>
    </section>
    <div class="banner_link">
        <div class="container">
            <div class="abnner_link_inner">
                <a class="active" href="{{url('home')}}">Home</a>
                <a href="{{url('team')}}">Team</a>
            </div>
        </div>
    </div>
    <!--================End Banner Area =================-->

    <!--================Our Workers Area =================-->
    <section class="our_workers_area">
        <div class="container">
            <div class="section_title">
                <h2>OUR DEDICATED TEAM</h2>
                <p>WE ARE PROUD OF OUR TEAM OF HIGHLY-SKILLED PROFESSIONALS. </p>
            </div>
            <div class="row d_team_inner">
                @foreach($team as $member)
                <div class="col-md-3 col-xs-6">
                    <div class="workers_item">
                        <div class="workers_img">
                            <img class="img-circle" src="{{asset('images/teams/'.$member->image)}}" alt="{{$member->name}}">
                            <ul>
                                <li><a href="{{$member->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{$member->linkedin}}" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                <li><a href="{{$member->facebook}}" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <a href="#"><h4>{{$member->name}}</h4></a>
                        <h6>{{$member->occupation }}</h6>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================End Our Workers Area =================-->

    <!--================Get In Consultation Area =================-->
    <section class="get_consult_area">
        <div class="container">
            <div class="pull-left">
                <h3>Find the Solution That Best Fits Your Business</h3>
            </div>
            <div class="pull-right">
                <a class="submit_btn" href="{{url('contacts')}}">get consultation</a>
            </div>
        </div>
    </section>
    <!--================End Get In Consultation Area =================-->

@endsection
