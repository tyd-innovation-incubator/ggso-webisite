@extends('ggso.layouts.masters')


@section('content')
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h3>Contact Us</h3>
            </div>
        </div>
    </section>
    <div class="banner_link">
        <div class="container">
            <div class="abnner_link_inner">
                <a class="active" href="{{url('home')}}">Home</a>
                <a href="{{url('contacts')}}">Contact Us</a>
            </div>
        </div>
    </div>
    <!--================End Banner Area =================-->

    <!--================Contact Us Area =================-->
    <section class="contact_us_area">
        <div class="container">
            <div class="contact_us_inner">
                <div class="section_title">
                    <h2>Feel Free to drop us a Message</h2>
                    <p>Our inspiration is to see community leaders are accountable and responsive to the citizens,
                        transparent on the use of public resources and in decision making.</p>
                </div>
                      <div class="col-md-12 col-sm-12 col-xs-12">
          @if (Session::has('success'))
          <div class="float-right">
             <div class="alert alert-dismissible" role="alert" style="color: white; background-color:#18ba60; opacity: 0.5; font-size: 20px;">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong></strong>{{ Session::get('success') }}
          </div>
      </div>
      @endif
  </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <form class="contact_us_form" action="/send-message" method="post"
                                  novalidate="novalidate">
                                 @csrf()
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="name" name="name"
                                           value="{{old('name')}}" placeholder="Name" required>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
              <strong class="text-danger">{{ $errors->first('name') }}</strong>
            </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" class="form-control" id="email" name="email"
                                           value="{{old('email')}}" placeholder="Email" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
              <strong class="text-danger">{{ $errors->first('email') }}</strong>
            </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="subject" value="{{old('subject')}}"
                                           name="subject" placeholder="Subject" required>
                                    @if ($errors->has('subject'))
                                        <span class="help-block">
              <strong class="text-danger">{{ $errors->first('subject') }}</strong>
            </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" name="message" id="message" rows="1"
                                              placeholder="Message" required> {{old('message')}}</textarea>

                                    @if ($errors->has('message'))
                                        <span class="help-block">
              <strong class="text-danger">{{ $errors->first('message') }}</strong>
            </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" value="submit" class="btn green_submit_btn form-control">
                                        submit now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our_about_image">
                            <img src="{{asset('images/contacts/'.$contact->image)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact_us_details">
                <div class="row">
                    <div class="col-md-4">
                        <div class="c_details_item">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="media-body">
                                    <p>{{$contact->location }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="c_details_item">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#">{{$contact->email}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="c_details_item">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#">{{$contact->phone}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Contact Us Area =================-->

    <!--================Map Area =================-->
    <section class="map_area">
            <!-- Start Map -->
            <div class="container-fluid" ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1982.1127992171205!2d39.11492141697742!3d-6.7919683372342945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNDcnMzEuMSJTIDM5wrAwNic1Ny43IkU!5e1!3m2!1sen!2stz!4v1549259479550" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    </section>
    <!--================End Map Area =================-->

@endsection
