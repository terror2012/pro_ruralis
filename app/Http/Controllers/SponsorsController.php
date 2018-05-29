<?php

namespace App\Http\Controllers;

use App\Eloquent\sponsors;
use App\User;

class SponsorsController extends Controller
{
    function index(IndexController $helper)
    {
        $data = $helper->get_contact_info();
        $sponsors = sponsors::latest()->get();
        $sponsors_array = [];
        foreach($sponsors as $sponsor)
        {
            $sponsor_array['image'] = $sponsor->logo_path;
            $sponsor_array['name'] = User::find($sponsor->user_id)->name;
            $sponsor_array['company'] = $sponsor->company_name;
            array_push($sponsors_array, $sponsor_array);
        }
        $data['partners'] = $helper->get_general_settings('partners', false, true);

        return view('sponsors')->with('data', $data)->with('sponsors', $sponsors_array);
    }
}
