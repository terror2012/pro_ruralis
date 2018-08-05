<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class message_history extends Model
{
    public $timestamps = true;
    protected $table = 'message_history';
    protected $guarded = ['id'];


    public function receiver()
    {
        return $this->hasOne('App\User','id', 'user_id');
    }
    public function sender()
    {
        return $this->hasOne('App\User', 'id', 'sender_id');
    }
}
