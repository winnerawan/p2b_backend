<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Fcm;

class NotificationController extends Controller
{
    public function index() {
        $options = array(
                [
                    'option_id' => 1,
                    'is_student' => 1,
                    'name' => 'MAHASISWA',
                ],
                [
                    'option_id' => 2,
                    'is_student' => 0,
                    'name' => 'UMUM',
                ],
                [
                    'option_id' => 3,
                    'is_student' => 0,
                    'name' => 'UMUM & MAHASISWA',
                ]
            );
        
        return view('admin.notifications.index')->with([
            'notif_options' => $options,
            'students' => \App\Participant::where('is_student', 1)->get(),
            'generals' => \App\Participant::where('is_student', 0)->get(),
        ]);
        // return $options;
    }

    public function store(Request $request) {
        $to = $request->option_id;
        // dd($to);
        // $recipients = array();
        if ($to==1) {
            $recipients = \App\Participant::where('is_student', 1)->get();
        } else if ($to==2) {
            $recipients = \App\Participant::where('is_student', 0)->get();
        } else {
            $recipients = \App\Participant::all();
        }

        $tokens = array();
        foreach($recipients as $re) {
            $tokens[] = $re->fcm_token;
        }
        // dd($tokens);

        Fcm::to($tokens)->notification([
            'title' => $request->title,
            'body' => $request->body
        ])->send();
    }
}
