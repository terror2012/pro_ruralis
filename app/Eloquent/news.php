<?php

namespace App\Eloquent;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    public $timestamps = true;
    protected $table = 'news';
    protected $guarded = ['id'];

    public function GetImageAttribute($value)
    {
        return url($value);
    }
    public function GetLessPostAttribute()
    {
        return substr($this->post, 0, 15) . '...';
    }
    public function GetCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }

}
