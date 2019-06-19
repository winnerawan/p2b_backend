<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;

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

    public function pay(Request $request) {
        $payment = new \App\Payment();
        $payment->participant_id = $request->participant_id;
        $payment->bank_id = $request->bank_id;
        $payment->no_ref = $request->no_ref;
        $payment->proof_image = ApiStudentController::upload_image($request);
        $payment->status = 0;

        $payment->save();

        if ($payment) {
                return response()->json(['error' => false, 'payment' => $payment]); 
            }
        return response()->json(['error' => true]);
    }    


    public static function upload_image(Request $request) {
        // validate($request, [
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        // ]);
    
        $image = $request->file('proof_image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/proofs/' . $filename);
        // $location = "/var/www/helb/service/public/uploads/cards/" .$filename;
        $url_image = "https://api.letshelb.me/uploads/cards/" .$filename;
        Image::make($image)->resize(800, 600)->save($location);
    
        return $url_image;
    }
}
