<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="images/old_logo.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GGSO</title>

    <!-- Icon css link -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="{{asset('vendors/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/revolution/css/navigation.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/animate-css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/owl-carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{asset('vendors/stroke-icon/style.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<!--================Header Area =================-->
<header class="main_header_area">
    <div class="header_top">
        <div class="container">
            <div class="header_top_inner">
                <div class="pull-left">
                    <a href="#"><i class="fa fa-phone"></i>{{$contact->phone}}</a>
                    <a href="#"><i class="fa fa-envelope-o"></i>{{$contact->email}}</a>
                    <a href="#"><i class="icon icon-Timer"></i>{{$contact->hours }}</a>
                </div>
                <div class="pull-right">
                    <ul class="header_social">
                        <li><a href="{{$contact->facebook}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{$contact->twitter}}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{$contact->linkedIn}}"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header_menu">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="{{asset('images/old_logo.png')}}" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href=" {{ url('home') }}">Home</a></li>
                        <li><a href=" {{ url('about') }}">About</a></li>
                        <li><a href=" {{ url('services') }}">Services</a></li>
                        <li><a href=" {{ url('news') }}">News</a></li>
                        <li><a href=" {{ url('testimonials') }}">Testimonials</a></li>
                        <li><a href=" {{ url('team') }}">Team</a></li>
                        <li><a href=" {{ url('contacts') }}">Contacts</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</header>
<!--================Header Area =================-->

<!--================Slider Area =================-->
<section class="main_slider_area">
    <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
        <ul>
            @foreach($slides as $slide)
            <li data-index="{{ $slide->data_index }}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('images/slides/'.$slide->image)}}"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{asset('images/slides/'.$slide->image)}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                <!-- LAYER NR. 1 -->
                <div class="slider_text_box">
                    <div class="tp-caption tp-resizeme first_text"
                         id="slide-1586-layer-1"
                         data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']"
                         data-y="['top','top','top','top']" data-voffset="['290','290','290','220','130']"
                         data-fontsize="['55','55','55','40','30']"
                         data-lineheight="['59','59','59','50','40']"
                         data-width="['550','550','550','400']"
                         data-height="none"
                         data-whitespace="normal"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                         data-textAlign="['left','left','left','left']">{{$slide->slogan_1}}</div>

                    <div class="tp-caption tp-resizeme secand_text"
                         id="slide-1587-layer-2"
                         data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']"
                         data-y="['top','top','top','top']" data-voffset="['435','435','435','340','225']"
                         data-fontsize="['18','18','18','18','16']"
                         data-lineheight="['26','26','26','26']"
                         data-width="['550','550','550','550','300']"
                         data-height="none"
                         data-whitespace="normal"
                         data-type="text"
                         data-responsive_offset="on"
                         data-transform_idle="o:1;"
                         data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">{{$slide->slogan_2}}
                    </div>

                    <div class="tp-caption tp-resizeme slider_button"
                         id="slide-1587-layer-3"
                         data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']"
                         data-y="['top','top','top','top']" data-voffset="['525','525','525','425','330']"
                         data-fontsize="['14','14','14','14']"
                         data-lineheight="['46','46','46','46']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                        <a class="main_btn" href="/services">Our services</a>
                        <a class="main_b_btn" href="/about">learn more</a>
                    </div>
                </div>
            </li>
                @endforeach
        </ul>
    </div>
</section>
<!--================End Slider Area =================-->
<!--================Welcome Consult Area =================-->
<section class="welcome_consult_area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="welcome_c_left">
                    <div class="sec_middle_title">
                        <h2>{{$home->title }}</span> </h2>
                    </div>
                    <div class="welcome_c_text">
                      {!! $home->content !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="welcome_c_image row m0 our_about_image">
                    <img src="{{asset('images/home/'.$home->image)}}" alt="{{$home->title}}">
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Welcome Consult Area =================-->

<!--================Helpline Area =================-->
<section class="helpline_area">
    <div class="container">
        <div class="helpline_inner">
            <div class="media">
                <div class="media-left">
                    <img src="{{asset('images/help-icon.png')}}" alt="{{$home->title}}">
                </div>
                <div class="media-body">
                    <h6>Need consultation</h6>
                    <h4>start improving your business today</h4>
                    <p>Contact our customer support team if you have any further questions. We are heare to help you out</p>
                    <div class="contact_d">
                        <a href="#">{{$contact->phone}}</a>
                        <a href="#">{{$contact->email}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Helpline Area =================-->





<!--================Testimonials Area =================-->

@if(count($testimonies) == 0)
<br>
@else 
<section class="testimonials_area">
    <div class="container">
        <div class="testimonials_slider owl-carousel">
            @foreach ($testimonies as $testimony)
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <img class="img-circle" src="{{asset('images/testimonies/'.$testimony->image)}}" alt="{{$testimony->name}}">
                            <i>“</i>
                        </div>
                        <div class="media-body">
                            <p>{{$testimony->message}}</p>
                            <h4>{{$testimony->name}}</h4>
                            <h5>{{ $testimony->occupation }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif 
<!--================End Testimonials Area =================-->

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
            <a class="submit_btn" href="/contact">get consultation</a>
        </div>
    </div>
</section>
<!--================End Get In Consultation Area =================-->
<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="footer_widget">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <aside class="f_widget about_widget">
                        <img class="img-responsive img-circle" src="{{asset('images/footer_logo.png')}}" alt="ggso">
                        <p>The Organization focuses at community level where majority of the population reside..</p>
                        <a class="f_r_link" href="/about">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        <ul class="f_social">
                            <li><a href="{{$contact->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$contact->linkedIn}}" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="{{$contact->facebook}}" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-3 col-xs-6">
                    <aside class="f_widget link_widget">
                        <div class="f_title">
                            <h3>Extra Links</h3>
                        </div>
                        <ul>
                            <li><a href="{{url('about')}}">-  About Us</a></li>
                            <li><a href="{{url('news')}}">-  News</a></li>
                            <li><a href="{{url('team')}}">-  Our Team</a></li>
                            <li><a href="{{url('testimonials')}}">- Testimonials</a></li>
                            <li><a href="{{url('contacts')}}">-  Contacts</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-3 col-xs-6">
                    <aside class="f_widget link_widget">
                        <div class="f_title">
                            <h3>our services</h3>
                        </div>
                        <ul>
                            @foreach($services as $service)
                                <li><a href="{{url('$services')}}">-{{$service->name}}</a></li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
                <div class="col-md-3 col-xs-6">
                    <aside class="f_widget contact_widget">
                        <div class="f_title">
                            <h3>get in touch</h3>
                        </div>
                        <div class="contact_inner">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <h4>GGSO</h4>
                                    <p>{{$contact->location }}</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#">{{$contact->phone}} </a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#">{{$contact->email}}</a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copyright">
        <div class="container">
            <div class="footer_copyright_inner">
                <div class="pull-left">
                    <p>Copyright © GGSO <script>document.write(new Date().getFullYear());</script>. All rights reserved. </p>
                </div>
                <div class="pull-right">
                    <h4>Created by: <a href="http://tyd.or.tz" target="_blank">TYD Innovation Incubator</a></h4>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->


<!--================Contact Success and Error message Area =================-->
<div id="success" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                <h2 class="modal-title">Thank you</h2>
                <p class="modal-subtitle">Your message is successfully sent...</p>
            </div>
        </div>
    </div>
</div>

<!-- Modals error -->

<div id="error" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                <h2 class="modal-title">Sorry !</h2>
                <p class="modal-subtitle"> Something went wrong </p>
            </div>
        </div>
    </div>
</div>
<!--================End Contact Success and Error message Area =================-->









<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery-2.2.4.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Rev slider js -->
<script src="{{asset('vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>

<script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('vendors/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('js/jquery.form.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>

<script src="{{asset('js/theme.js')}}"></script>
</body>
</html>