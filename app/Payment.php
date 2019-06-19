<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Payment extends Model
{
    public function participant() {
        return $this->belongsTo(Participant::class);
    }

    public function bank() {
        return $this->belongsTo(Bank::class);
    }

    public static function getStudentPayments() {
        $payments = DB::select('SELECT p.id, g.participant_id, g.fullname, g.no_reg, g.nim, b.name as bank_name, 
                        p.no_ref, p.proof_image, p.status FROM students g INNER JOIN payments p ON g.participant_id = p.participant_id 
                        INNER JOIN participants ON g.participant_id = participants.id INNER JOIN banks as b ON b.id = p.bank_id 
                        WHERE participants.is_student = 1');
        return $payments;
    }

    public static function getGeneralPayments() {
        $payments = DB::select('SELECT p.id, g.participant_id, g.fullname, g.no_reg, g.nik, b.name as bank_name, 
                        p.no_ref, p.proof_image, p.status FROM generals g INNER JOIN payments p ON g.participant_id = p.participant_id 
                        INNER JOIN participants ON g.participant_id = participants.id INNER JOIN banks as b ON b.id = p.bank_id 
                        WHERE participants.is_student = 0');
        return $payments;
    }
}
