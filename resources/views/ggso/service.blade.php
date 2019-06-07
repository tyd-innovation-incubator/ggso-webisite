@extends('ggso.layouts.masters')

@section('content')

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h3>Our Services</h3>
            </div>
        </div>
    </section>
    <div class="banner_link">
        <div class="container">
            <div class="abnner_link_inner">
                <a class="active" href="{{url('home')}}">Home</a>
                <a href="{{url('services')}}">Services</a>
            </div>
        </div>
    </div>
    <!--================End Banner Area =================-->

    <!--================Service Area =================-->
    <section class="service_area">
        <div class="container">
            <div class="section_title">
                <h2>What we offer</h2>
                <p>Ipsum is simply text of the stry simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the. Lorem Ipsum is  simply  text of the stry simply dummy text of the printing and text of the stry simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="row service_item_inner">
                @foreach($services as $service)
                <div class="col-md-4 col-xs-6">
                    <div class="business_box_item">
                        <a href="#" class="business_image">
                            <img src="{{asset('images/services/'.$service->image)}}" alt="{{$service->name}}">
                        </a>
                        <div class="business_text">
                            <a href="#"><h4>{{$service->name}}</h4></a>
                            <h5>{{$service->description }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--================End Service Area =================-->


    <!--================Partner Area =================-->
    <section class="partner_area">
        <div class="container">
            <div class="partner_slider owl-carousel">
                @foreach($partners as $partner)
                    <div class="item">
                        <a href="{{$partner->link}}" target="_blank"> <img src="{{asset('images/partners/'.$partner->image) }}" alt="{{$partner->name}}"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================End Partner Area =================-->

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
