<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index() {
        $options = array(
                [
                    'is_student' => 1,
                    'name' => 'MAHASISWA',
                ],
                [
                    'is_student' => 0,
                    'name' => 'UMUM',
                ],
                [
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

    }
}
