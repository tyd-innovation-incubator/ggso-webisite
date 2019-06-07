@extends('ggso.layouts.masters')

@section('content')

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h3>News</h3>
            </div>
        </div>
    </section>
    <div class="banner_link">
        <div class="container">
            <div class="abnner_link_inner">
                <a class="active" href="{{url('home')}}">Home</a>
                <a href="{{url('news')}}">News</a>
            </div>
        </div>
    </div>
    <!--================End Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="main_blog_area">
        <div class="container">
            @if(count($news) == 0)
                <h1 class="text-center">NEWS WILL BE HERE SOON</h1>
            @else
            <div class="row main_blog_inner">
                <div class="col-md-9">

                    <h1>Tag : {{$tagName}}</h1>
                    <hr>

                    <div class="main_blog_items">
                        @foreach($news as $new)
                        <div class="main_blog_item">
                            <div class="main_blog_image">
                                <img src="{{asset('images/news/'.$new->image)}}" alt="{{$new->title}}">
                                <div class="date">
                                        <h5>{{\Carbon\Carbon::parse($new->created_at)->format('d')}} <br>  <span>{{\Carbon\Carbon::parse($new->created_at)->format('M')}}</span></h5>
                                    </h5>
                                </div>
                            </div>
                            <div class="main_blog_text">
                                <a href="/news/{{$new->slug}}"><h2>{{$new->title}}</h2></a>
                                <div class="blog_author_area">
                                    <a href="#"><i class="fa fa-tag"></i><span>{{$new->tag }}</span></a>

                                </div>
                                {!! \Illuminate\Support\Str::words($new->content, 35,'...')  !!}
                                <br>
                                <a class="b_readmore" href="/news/{{$new->slug}}">Read more</a>
                            </div>
                        </div>
                        @endforeach




                    <nav aria-label="Page navigation" class="blog_pagination">

                        {{ $news->links( "pagination::bootstrap-4") }}

                    </nav>
                </div>

                </div>

                <div class="col-md-3">
                    <div class="sidebar_area">
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

                @endif
        </div>
    </section>
    <!--================End Blog Area =================-->

@endsection
