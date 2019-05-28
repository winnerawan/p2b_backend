<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function participant() {
        return $this->belongsTo(\App\Participant::class);
    }
}
