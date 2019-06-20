<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Participant extends Authenticatable
{
    protected $fillable = [
        'email', 'password',
    ];

    public function payments() {
        return $this->hasMany(Payment::class);
    }

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
