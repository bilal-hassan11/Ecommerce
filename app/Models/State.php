<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class State extends Model
{   
    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
}
