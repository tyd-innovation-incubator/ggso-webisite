@extends('ggso.layouts.masters')

@section('content')

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h3>Testimonials</h3>
            </div>
        </div>
    </section>
    <div class="banner_link">
        <div class="container">
            <div class="abnner_link_inner">
                <a class="active" href="{{url('home')}}">Home</a>
                <a href="{{url('testimonials')}}">Testimonials</a>
            </div>
        </div>
    </div>
    <!--================End Banner Area =================-->

    <!--================Testimonial Page Area =================-->
    <section class="testimonial_page_area">

        @if(count($testimonies) == 0 )
            <h1 class="text-center">Testimonials will be added Soon</h1>
            @else
            @foreach($testimonies as $testimony)
        <div class="testi_page_item">
            <div class="container">
                <div class="media">
                    <div class="media-left">
                        <img  class="img-circle" src="{{asset('images/testimonies/'.$testimony->image)}}" alt="{{$testimony->name}}">
                        <h5>“</h5>
                    </div>
                    <div class="media-body">
                        <p>{{$testimony->message}}</p>
                        <a href="#"><h4>- {{$testimony->name}}</h4></a>
                        <h5>{{$testimony->occupation }}</h5>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
                <center>{{ $testimonies->links("pagination::bootstrap-4") }}</center>
            @endif
    </section>
    <!--================End Testimonial Page Area =================-->


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
