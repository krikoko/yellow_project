<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
