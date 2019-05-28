<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absent extends Model
{
    public function student() {
        return $this->belongsTo(Participant::class);
    }
}
