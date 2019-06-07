@extends('ggso.layouts.masters')


@section('content')
<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_content">
            <h3>About Organization</h3>
        </div>
    </div>
</section>
<div class="banner_link">
    <div class="container">
        <div class="abnner_link_inner">
            <a class="active" href="{{url('home')}}">Home</a>
            <a href="{{ url('about') }}">About Organization</a>
        </div>
    </div>
</div>
<!--================End Banner Area =================-->

<!--================Carrers Area =================-->
<section class="carrers_area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="carrers_left">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#organization" aria-controls="organization" role="tab" data-toggle="tab">Overview</a></li>
                        <li role="presentation"><a href="#structure" aria-controls="structure" role="tab" data-toggle="tab">Structure</a></li>
                        <li role="presentation"><a href="#faqs" aria-controls="faqs" role="tab" data-toggle="tab">faq</a></li>
                        <li role="presentation"><a href="#partners" aria-controls="partners" role="tab" data-toggle="tab">Our partners</a></li>
                    </ul>
                    <div class="contact_info">
                        <h2>Contact Info</h2>
                        <p>{{$contact->location }}</p>
                        <h5>Phone : <a href="#">{{$contact->phone }}</a></h5>
                        <h5>Email : <a href="#">{{$contact->email }}</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="carrers_right_content">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active fade in" id="organization">
                            <div class="about_company">
                                <div class="our_about_image">
                                    <img src="{{asset('images/company/'.$about->image)}}" alt="">
                                </div>
                                <div class="section_title">
                                    <h2>About Organization</h2>
                                </div>

                                {!! $about->overview !!}
                            </div>
                            <div class="development_process" style="margin: 40px 0px 40px 0px;">
                                <div class="section_title">
                                    <h2>Mission</h2>
                                </div>
                                {!!   $about->mission !!}
                            </div>

                            <div class="development_process">
                                <div class="section_title">
                                    <h2>Vision</h2>
                                </div>
                                {!!   $about->vision !!}
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="structure">
                            <div class="row we_are_content companu_history_img">
                                <div class="col-md-12">
                                    <div class="we_are_text">
                                        <div class="section_title">
                                            <h2>Our Organization Structure</h2>
                                        </div>
                                        <img class="img-responsive" src="{{asset('images/organization_structure.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="faqs">
                            <div class="panel-group faq_panel" id="faq_acc" role="tablist" aria-multiselectable="true">
                                @if(count($faqs) == 0)
                                    <h1 class="text-center">FAQS will be added Soon</h1>
                                @else
                                @foreach($faqs as $faq)
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="h_faq{{$faq->id}}">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#faq_acc" href="#c_faq{{$faq->id}}" aria-expanded="true" aria-controls="c_faq{{$faq->id}}">
                                                {{$faq->question }}
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="c_faq{{$faq->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="h_faq{{$faq->id}}">
                                        <div class="panel-body">
                                           {{$faq->answer}}
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                                 @endif
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="partners">
                            <div class="partner_details">
                                <div class="section_title">
                                    <h2>Our partners</h2>
                                </div>
                                <div class="partner_details_inner">
                                    @foreach($partners as $partner)
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{asset('images/partners/'.$partner->image)}}" alt="{{$partner->name}}">
                                        </div>
                                        <div class="media-body">
                                            <h4><a href="{{$partner->link}}" target="_blank">{{$partner->name}}</a></h4>
                                            <p>{{  $partner->description }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Carrers Area =================-->

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
