<?php

namespace App\Http\Controllers;

use App\Eloquent\general_settings;
use App\Eloquent\news;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    function index()
    {
        $data = [];

        $settings_list = ['header1', 'header2', 'mission'];

        $settings_array = ['categ_prize'];

        $settings_array_assoc = ['partners'];

        //General Settings assignment

        $data = $this->get_contact_info();

        foreach ($settings_list as $setting)
        {
            $data[$setting] = $this->get_general_settings($setting);
        }
        foreach ($settings_array as $set_a)
        {
            $data[$set_a] = $this->get_general_settings($set_a, true);
        }
        foreach($settings_array_assoc as $set_a_a)
        {
            $data[$set_a_a] = $this->get_general_settings($set_a_a, false, true);
        }

        $news = news::latest()->take(3)->get();
        $data['news'] = [];
        foreach($news as $new)
        {

            $new_array['title'] = $new->title;
            $new_array['id'] = $new->id;
            $new_array['image'] = $new->image;
            $new_array['post'] = implode(' ', array_slice(str_word_count(strip_tags(html_entity_decode($new->post)), 2), 0, 25)) . ' ...';
            array_push($data['news'], $new_array);
        }

        return view('index')->with('data', $data);
    }


    public function set_general_settings($name, $value)
    {
       try
       {
           $general = general_settings::where('name', '=', $name)->first();
           $general->value = $value;
           $general->save();
       } catch (QueryException $e)
       {
           flash($e->getMessage())->error();
           return null;
       }
    }
    public function get_general_settings($name, $array = false, $assoc = false, $multiple = false, $delimiter = ',')
    {

        try
        {
            $general = general_settings::where('name', '=', $name)->first();
            if($general)
                if($multiple and !$assoc) {
                    $array_multy = [];
                    $gen = general_settings::where('name', '=', $name)->get();
                    foreach ($gen as $g) {
                        array_push($array_multy, $g->value);
                    }
                    return $array_multy;
                }elseif($multiple and $assoc and $array) {
                    $array_multy_assoc = [];
                    $gen = general_settings::where('name', '=', $name)->get();
                    $id_val = 0;
                    foreach ($gen as $g) {
                        $array_finished = explode($delimiter, $g->value);
                        $array_mult_assoc = [];
                        $id_val += 1;
                        foreach($array_finished as $A_finished)
                        {
                                $array_mult_assoc['id'] = $id_val;
                                $array_mult_assoc[explode('=>', $A_finished)[0]] = explode('=>', $A_finished)[1];
                        }
                        array_push($array_multy_assoc, $array_mult_assoc);
                    }
                    return $array_multy_assoc;
                }elseif($multiple and $assoc)
                {
                    $array_multy_assoc = [];
                    $gen  = general_settings::where('name', '=', $name)->get();
                    foreach($gen as $g)
                    {
                        $array_multy_assoc[explode('=>', $g->value)[0]] = explode('=>', $g->value)[1];
                    }
                    return $array_multy_assoc;
                }

                elseif($array)
                    return explode($delimiter, $general->value);
                elseif($assoc)
                {
                    $finish_assoc = [];
                    $array_assoc = explode($delimiter, $general->value);
                    foreach($array_assoc as $p)
                    {
                        $finish_assoc[explode('=>', $p)[0]] = explode('=>', $p)[1];
                    }
                    return $finish_assoc;
                }
                else
                    return $general->value;
            else
                return null;
        } catch (QueryException $e)
        {
            flash($e->getMessage())->error();
            return null;
        }
    }
    public function get_contact_info()
    {
        $settings_list = ['city', 'address', 'address2', 'room', 'email', 'phone', 'facebook', 'twitter', 'instagram', 'google'];
        $data = [];
        foreach($settings_list as $settings)
        {
            $data[$settings] = $this->get_general_settings($settings);
        }
        return $data;
    }
}
