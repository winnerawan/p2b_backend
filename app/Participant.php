<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    public function student() {
        return $this->hasMany(Student::class);
    }

    public function general() {
        return $this->hasMany(General::class);
    }

    public function grades() {
        return $this->hasMany(Grade::class);
    }
}
