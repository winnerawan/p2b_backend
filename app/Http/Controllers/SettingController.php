<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(Request $request) {
        $setting = \App\Setting::find(1);
        return view('admin.settings.index')->with(['setting' => $setting]);
    }

    public function edit($id) {
        $setting = \App\Setting::find(1);
        return view('admin.settings.index')->with(['setting' => $setting]);
    }

    public function update(Request $request, $id) {
        $setting = \App\Setting::find(1);
        $setting->test_date = $request->test_date;
        $setting->registration_fee = $request->registration_fee;
        $setting->message_payment_success = $request->message_payment_success;
        $setting->message_payment_failed = $request->message_payment_failed;
        $setting->message_grade_out = $request->message_grade_out;

        $setting->save();

        return redirect('home');
    }
}
