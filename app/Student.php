<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Student extends Model
{
    public function participant() {
        return $this->belongsTo(Participant::class);
    }

    public function program() {
        return $this->belongsTo(ProgramStudy::class);
    }

    public static function alreadyPaid() {
        $payments = DB::select('SELECT p.id, g.participant_id, g.fullname, g.no_reg, g.nik, b.name as bank_name, 
                        p.no_ref, p.proof_image, p.status FROM generals g INNER JOIN payments p ON g.participant_id = p.participant_id 
                        INNER JOIN participants ON g.participant_id = participants.id INNER JOIN banks as b ON b.id = p.bank_id 
                        WHERE participants.is_student = 1 AND p.status = 1');
    }

    public static function completed() {
        $payments = DB::select('SELECT p.id, g.participant_id, g.fullname, g.no_reg, g.nik, b.name as bank_name, 
                        p.no_ref, p.proof_image, p.status FROM generals g INNER JOIN payments p ON g.participant_id = p.participant_id 
                        INNER JOIN participants ON g.participant_id = participants.id INNER JOIN banks as b ON b.id = p.bank_id 
                        WHERE participants.is_student = 1 AND p.status = 2');
    }
}
