<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class sponsors extends Model
{
    public $timestamps = true;
    protected $table = 'sponsors';
    protected $guarded = ['id'];

    public function sponsorships()
    {
        $this->hasMany('App\Eloquent\sponsorships', 'sponsor_id', 'id');
    }

}
