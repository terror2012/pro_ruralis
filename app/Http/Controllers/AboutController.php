<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(IndexController $helpers)
    {

        $data = $helpers->get_contact_info();

        $settings = ['about_pic', 'about_us'];

        $settings_array_multy_assoc = ['objectives'];

        //General settings assignment
        foreach($settings as $set)
        {
            $data[$set] = $helpers->get_general_settings($set);
        }
        foreach($settings_array_multy_assoc as $set_m_a)
        {
            $data[$set_m_a] = $helpers->get_general_settings($set_m_a, true, true, true, '*/*');
        }
        $data['staff'] = $helpers->get_general_settings('staff', true, true, true);
        return view('about')->with('data', $data);
    }
}
