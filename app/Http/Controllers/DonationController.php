<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    function index(IndexController $helper)
    {
        $data = $helper->get_contact_info();
        $settings = ['company_name', 'company_address', 'cod_fiscal', 'bank_type', 'bank_account', 'contact_person_name', 'contact_person_phone'];
        foreach($settings as $set) {
            $data[$set] = $helper->get_general_settings($set);
        }
        $data['faq'] = $helper->get_general_settings('faq_donation', true, true, true);
        return view('donate')->with('data', $data);
    }
}
