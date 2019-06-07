@extends('ggso.layouts.masters')

@section('content')

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h3>Blog</h3>
            </div>
        </div>
    </section>
    <div class="banner_link">
        <div class="container">
            <div class="abnner_link_inner">
                <a class="active" href="{{url('home')}}">Home</a>
                <a href="{{url('news')}}">News</a>
                <a href="/news/{{$new->slug}}">{{$new->title}}</a>
            </div>
        </div>
    </div>
    <!--================End Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="main_blog_area single_blog_details">
        <div class="container">
            <div class="row main_blog_inner">
                <div class="col-md-9">
                    <div class="main_blog_items">
                        <div class="main_blog_item">
                            <div class="main_blog_image">
                                <img src="{{asset('images/news/'.$new->image)}}" alt="{{$new->title}}">
                                <div class="date">
                                    <h5>{{\Carbon\Carbon::parse($new->created_at)->format('d')}} <br>  <span>{{\Carbon\Carbon::parse($new->created_at)->format('M')}}</span></h5>
                                </div>
                            </div>
                            <div class="main_blog_text">
                                <a href="/news/{{$new->slug}}"><h2>{{$new->title }}</h2></a>
                                <div class="blog_author_area">
                                    <a href="#"><i class="fa fa-tag"></i><span>{{$new->tag}}</span></a>

                                </div>
                                {!! $new->content !!}
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-md-3">
                    <div class="sidebar_area">
                        <aside class="r_widget search_widget">
                            <form action="{{ route('search') }}" method="POST">
                                @csrf
                                <div class="input-group">
                                    <input type="text" class="form-control" name="query"
                                           placeholder="Enter Search Keywords">
                                     <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i
                                                    class="icon icon-Search"></i></button>
                                    </span>
                                </div>
                            </form>
                            </form>
                        </aside>
                        <aside class="r_widget recent_widget">
                            <div class="r_widget_title">
                                <h3>Recent News</h3>
                            </div>
                            <div class="recent_inner">
                                @foreach($latestNews as $new)
                                    <div class="recent_item">
                                        <a href="/news/{{$new->slug}}"><h4>{{$new->title}}</h4></a>
                                        <h5>{{ $new->created_at->toFormattedDateString() }}</h5>
                                    </div>
                                @endforeach
                            </div>
                        </aside>
                        <aside class="r_widget recent_widget">
                            <div class="r_widget_title">
                                <h3>Tages</h3>
                            </div>
                            <ul>
                                @foreach($tags as $tag)
                                    <li><a href="/news/tags/{{$tag->id}}">{{$tag->name }}</a></li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Blog Area =================-->
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
