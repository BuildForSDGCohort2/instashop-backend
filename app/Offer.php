<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $guarded = [];

    public function supplier()
    {
        return $this->belongsTo(User::class);
    }
}
