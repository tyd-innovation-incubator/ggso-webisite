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

@yield('content')

<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="footer_widget">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <aside class="f_widget about_widget">
                        <img class="img-responsive img-circle" src="{{asset('images/footer_logo.png')}}" alt="ggso">
                        <p>The Organization focuses at community level where majority of the population reside ...</p>
                        <a class="f_r_link" href="{{url('about')}}">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
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