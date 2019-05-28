<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function program_study() {
        return $this->hasMany(ProgramStudy::class);
    }
}
