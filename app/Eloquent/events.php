<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    public $timestamps = true;
    protected $table = 'events';
    protected $guarded = ['id'];
}
