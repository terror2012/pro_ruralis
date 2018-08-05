<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class sponsorships extends Model
{
    public $timestamps = true;
    protected $table = 'sponsorships';
    protected $guarded = ['id'];
}
