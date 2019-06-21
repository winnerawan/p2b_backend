<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UtilsController extends Controller
{
    public function faculties() {
        $faculties = \App\Faculty::all();
        return response()->json(['error' => false, 'faculties' => $faculties]); 
    }

    public function programs() {
        $programs = \App\ProgramStudy::all();
        return response()->json(['error' => false, 'programs' => $programs]); 
    }

    public function banks() {
        $banks = \App\Bank::all();
        return response()->json(['error' => false, 'banks' => $banks]); 
    }

    public function studentProfile($participant_id) {
        $student = \App\Student::where('participant_id', $participant_id)->get();
        if ($student) {
            return response()->json(['error' => false, 'student' => $student]); 
        }
    }

    public function generalProfile($participant_id) {
        $general = \App\General::where('participant_id', $participant_id)->get();
        if ($general) {
            return response()->json(['error' => false, 'general' => $general]); 
        }
    }

    public function sendFcmToken(Request $request) {
	$id = $request['participant_id'];
        $participant = \App\Participant::find($id);
        $participant->fcm_token = $request['fcm_token'];
        $participant->save();

        if ($participant) {
            return response()->json(['error' => false, 'message' => 'Token Saved!']); 
        }
        return response()->json(['error' => true, 'message' => 'Can\'t Save Token!', 'p' => $participant]); 
    }
}
