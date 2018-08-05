<?php

namespace App\Http\Controllers;

use App\Eloquent\news;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class AdminController extends Controller
{
    function index()
    {
        return view('admin.index', [
            'news' => news::all(),
        ]);
    }
    function add_article_index()
    {
        try
        {
            $html = view('layouts.admin.add_article')->render();
            return response()->json(['html' => $html], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    function add_article(Request $r)
    {
        $data = $r->only('title', 'post');
        $news = new news();
        $news->user_id = Auth::user()->id;
        $news->title = $data['title'];
        $path = 'img/'. $r->file('image')->getClientOriginalName();
        try
        {
            $this->upload_image($r->file('image'), $path);
            $news->image = $path;
        } catch (Exception $e)
        {
            return response()->json(['error'=>$e->getMessage()], 500);
        }
        $news->post = $data['post'];
        $news->save();
        return response()->json(['message' => 'success'], 200);
    }

    public function upload_image($file, $path)
    {
        Image::make($file)->resize(1024, 1024)->save($path);
    }
}
