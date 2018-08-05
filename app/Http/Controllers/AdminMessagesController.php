<?php

namespace App\Http\Controllers;

use App\Eloquent\message_history;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMessagesController extends Controller
{
    function view()
    {
        $senders = array_unique(message_history::where('user_id', '=', Auth::user()->id)->pluck('sender_id')->toArray());
        $sender_array = [];
        foreach($senders as $sender)
        {
            $last_message = message_history::where('user_id', '=', Auth::user()->id)->where('sender_id', '=', $sender)->orderBy('created_at', 'desc')->first();
            $sender_array[$sender]['name'] = User::find($sender)->name;
            $sender_array[$sender]['last_subject'] = $last_message->subject;
            $sender_array[$sender]['last_sent_at'] = $last_message->created_at;
        }
        $sender_history = message_history::where('user_id', '=', Auth::user()->id)->where('sender_id', '=',message_history::where('user_id', '=', Auth::user()->id)->orderBy('created_at')->take(1)->pluck('sender_id'))->orderBy('created_at', 'asc')->get();
        return view('admin.messages',
            [
                'senders'=>$sender_array,
                'sender_history' => $sender_history,
            ]);
    }
}
