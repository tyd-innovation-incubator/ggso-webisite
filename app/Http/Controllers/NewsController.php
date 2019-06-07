<?php

namespace App\Http\Controllers;

use App\Tags;
use Illuminate\Http\Request;
use App\Contacts;
use App\News;
use App\Services;
use Spatie\Searchable\Search;

class NewsController extends Controller
{
    public function  index()
    {
        $contact = Contacts::first();

        $news = News::latest()->where('status','=',1)->paginate(5);

        $latestNews = News::latest()->where('status','=',1)->take(4)->get();

        $tags = Tags::all();

        $services = Services::latest()->take(4)->get();

        return view('ggso.news.index',compact(['news','contact','latestNews','tags','services']));

    }

    public function show($slug)
    {
        $contact = Contacts::first();

        $new = News::where('slug','=', $slug)->first();

        $latestNews = News::latest()->where('status','=',1)->take(4)->get();

        $tags = Tags::all();

        $services = Services::latest()->take(4)->get();

        return view('ggso.news.show',compact(['new','contact','tags','latestNews','services']));
    }

    public function withTag($id)
    {
        $contact = Contacts::first();

        $tag = Tags::findOrFail($id);

        $tagName= $tag->name;

        //search latest news by tags
        $news = News::latest()->where([
            ['status', '=', '1'],
            ['tag', '=', $tag->name],
        ])->paginate(6);

        $tags = Tags::all();

        $services = Services::latest()->take(4)->get();

        return view('ggso.news.withTags',compact(['news','contact','tags','services','tagName']));
    }

     // search news
    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(News::class, 'title','content')
            ->perform($request->input('query'));

        $contact = Contacts::first();

        $latestNews = News::latest()->where('status','=',1)->take(4)->get();

        $tags = Tags::all();

        $services = Services::latest()->take(4)->get();

        return view('ggso.news.search', compact(['searchResults','contact','latestNews','tags','services']));
    }
}
