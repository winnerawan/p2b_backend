<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiStudentController extends Controller
{
    
    public function register(Request $request) {
        $participant = new \App\Participant();
        $participant->email = $request['email'];
        $participant->password = bcrypt($request['password']);
        $participant->fcm_token = "";
        $participant->is_student = $request['is_student'];
        $participant->save();

        if (!$participant) {
            return response()->json(['error' => true]); 
        } 
            return response()->json(['error' => false]); 
    }

    public function login(Request $request) {
        // $this->validate($request, [
        // 'email' => 'required|email',
        // 'password' => 'required',
        // ]);

        // if (\Auth::attempt([
        //     'email' => $request['email'],
        //     'password' => $request['password']]
        // )){
        if (\Auth::guard('api')->attempt([
            'email' => $request->email,
            'password' => $request->password]
        )){
            $participant = \App\Participant::where('email', $request->email)->get();
            return response()->json(['error' => false, 'participant' => $participant]); 
        }
            return response()->json(['error' => true]); 
        }


        public function insertDataStudent(Request $request) {
            $student = new \App\Student();
            $student->participant_id = $request->participant_id;
            $student->program_id = $request->program_id;
            $student->no_reg = $request->no_reg;
            $student->nim = $request->nim;
            $student->fullname = $request->fullname;
            $student->dob = $request->dob;
            $student->save();

            if ($student) {
                return response()->json(['error' => false, 'student' => $student]); 
            }
            return response()->json(['error' => true]); 

        }

        public function insertDataGeneral(Request $request) {
            $general = new \App\General();
            $general->participant_id = $request->participant->id;
            $general->no_reg = $request->no_reg;
            $general->nik = $request->nik;
            $general->fullname = $request->fullname;
            $general->dob = $request->dob;
            $general->phone = $request->phone;
            $general->save();

            if ($general) {
                return response()->json(['error' => false, 'general' => $general]); 
            }
            return response()->json(['error' => true]); 
        }
}
