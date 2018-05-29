<?php

namespace App\Http\Controllers;

use App\Eloquent\gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Psy\Exception\ErrorException;

class GalleryController extends Controller
{
    function index(IndexController $helper)
    {
        $data = $helper->get_contact_info();
        $gallery = gallery::all()->groupBy(function($date)
        {
            return Carbon::parse($date->created_at)->format('m');
        });
        $gal_array = [];
        if($gallery->count() > 0)
        {
            foreach($gallery[Carbon::now()->format('m')] as $gal)
            {
                $temp_array['image'] = $gal->image;
                $temp_array['id'] = $gal->id;
                $temp_array['alt'] = $gal->alt;
                array_push($gal_array, $temp_array);
            }
        }
        $current_month = Carbon::now()->format('m');
        $years = [];
        for($i = 2018; $i <= intval(Carbon::now()->format('Y')); $i++)
        {
            $year_array['year'] = $i;
            $year_array['selected'] = false;
            array_push($years, $year_array);
        }
        end($years);
        $years[key($years)]['selected'] = true;
        return view('gallery')->with('images', $gal_array)->with('current_month', $current_month)->with('years', $years)->with('data', $data);
    }
    function api_get_images(Request $r)
    {
        $post_data = $r->only('month', 'year');
            $gallery = gallery::all()
                ->groupBy(function($date){
                    return Carbon::parse($date->created_at)->format('Y');
                });
            $month = $gallery[$post_data['year']]->groupBy(function($date2)
            {
                return Carbon::parse($date2->created_at)->format('m');
            })->toArray();
        if(array_key_exists($post_data['month'], $month))
        {
            $month = $month[$post_data['month']];
        }
        else
        {
            return '231';
        }
            return response()->json($month);
    }
}
