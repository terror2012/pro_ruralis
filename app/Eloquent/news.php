<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    public $timestamps = true;
    protected $table = 'news';
    protected $guarded = ['id'];
}
