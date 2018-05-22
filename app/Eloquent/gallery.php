<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    public $timestamps = true;
    protected $table = 'gallery';
    protected $guarded = ['id'];
}
