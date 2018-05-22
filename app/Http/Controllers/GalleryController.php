<?php

namespace App\Http\Controllers;

use App\Eloquent\gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function index()
    {
        $gallery = gallery::all()->groupBy(function($date)
        {
            return Carbon::parse($date->created_at)->format('m');
        });
        $gal_array = [];
        foreach($gallery[Carbon::now()->format('m')] as $gal)
        {
            dd($gal);
        }
        return view('gallery');
    }
}
