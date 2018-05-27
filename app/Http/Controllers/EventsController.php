<?php

namespace App\Http\Controllers;

use App\Eloquent\events;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    function index(IndexController $helper)
    {
        $data = $helper->get_contact_info();
        $events = events::where('event_time', '>=', Carbon::now())->get();
        $events_array = [];

        foreach($events as $event)
        {
            $event_array['id'] = $event->id;
            $event_array['title_event'] = $event->title_event;
            $event_array['title_body'] = $event->title_body;
            $event_array['body'] = $event->body;
            $event_array['location'] = $event->location;
            $event_array['google_maps_link'] = $event->google_maps_link;
            $event_array['author'] = User::find($event->user_id)->name;
            $event_array['event_link'] = $event->external_event_link;
            $event_array['event_time'] = Carbon::parse($event->event_time)->diffForHumans();
            array_push($events_array, $event_array);
        }
        return view('events')->with('data', $data)->with('events', $events_array);
    }
}
