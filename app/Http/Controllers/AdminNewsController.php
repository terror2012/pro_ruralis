<?php

namespace App\Http\Controllers;

use App\Eloquent\news;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    function view()
    {
        $news = news::all()->sortBy('created_at', SORT_DESC);
        $total_news = news::all()->count();
        return view('admin.news', [
            'news'=>$news,
            'count_news'=>$total_news,
        ]);
    }
}
