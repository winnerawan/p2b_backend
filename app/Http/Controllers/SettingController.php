<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(Request $request) {
        return view('admin.settings.index')->with([]);
    }
}
