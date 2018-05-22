<?php

namespace App\Http\Controllers;

use App\Eloquent\news;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index(IndexController $helper)
    {
        $latest_array = [];
        $news_array = [];
        $data = $helper->get_contact_info();
        $latest_news = news::latest()->take(3)->get();
        $news = news::latest()->take($this->get_news_per_page())->get();

        foreach($latest_news as $l_news)
        {
            $latest_stuff['id'] = $l_news->id;
            $latest_stuff['title'] = $l_news->title;
            $latest_stuff['image'] = $l_news->image;
            $latest_stuff['post'] = implode(' ', array_slice(str_word_count(strip_tags(html_entity_decode($l_news->post)), 2), 0, 10)) . ' ...';
            array_push($latest_array, $latest_stuff);
        }
        foreach($news as $new)
        {
            $news_stuff['id'] = $new->id;
            $news_stuff['title'] = $new->title;
            $news_stuff['author'] = User::find($new->user_id)->name;
            $news_stuff['created_at'] = Carbon::parse($new->created_at)->diffForHumans();
            array_push($news_array, $news_stuff);
        }

        return view('news')->with('data', $data)->with('latest', $latest_array)->with('news', $news_array);
    }
    function postIndex($id, IndexController $helper)
    {
        $data = $helper->get_contact_info();

        $news = news::find($id);

        $news_array = [];

        if($news)
        {
            $news_array['id'] = $id;
            $news_array['title'] = $news->title;
            $news_array['image'] = $news->image;
            $news_array['post'] = $news->post;
            $news_array['author'] = User::find($news->user_id)->name;
            $news_array['created_at'] = Carbon::parse($news->created_at);
        }

        return view('news-post')->with('data', $data)->with('news', $news_array);
    }

    protected function get_news_per_page()
    {
        return 3;
    }

    function api_max_pages()
    {
        return (ceil(news::all()->count() / $this->get_news_per_page()));
    }
    function get_pages(Request $r)
    {
        $news_array = [];
        $news = news::latest()->skip($this->get_news_per_page() * ($r->get('page') - 1))->take($this->get_news_per_page())->get();
        foreach($news as $new)
        {
            $new_array['title'] = $new->title;
            $new_array['link'] = url('/post='.$new->id);
            $new_array['post'] = $new->post;
            $new_array['author'] = User::find($new->user_id)->name;
            $new_array['created_at'] = Carbon::parse($new->created_at)->diffForHumans();
            array_push($news_array, $new_array);
        }
        return response()->json($news_array);
    }
}
