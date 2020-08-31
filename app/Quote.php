<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    public function supplier()
    {
        return $this->belongsTo(User::class);
    }
}
