<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $guarded = [];

    public function buyer()
    {
        return $this->belongsTo(User::class);
    }
}
