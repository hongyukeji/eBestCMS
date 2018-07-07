<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Article extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function getCreatedAtAttribute($date)
    {
        if (Carbon::now() < Carbon::parse($date)->addDays(10)) {
            return Carbon::parse($date);
        }
        return Carbon::parse($date)->diffForHumans();
    }
}
