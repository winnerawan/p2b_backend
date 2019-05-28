<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $participants = \App\Participant::all();
        $generals = \App\Participant::where('is_student', 0)->get();
        $students = \App\Participant::where('is_student', 1)->get();
        $payments =  \App\Payment::all();

        $weekdays = array();
        $weekday_val = array();
        $graph1 = DB::select('SELECT COUNT(id) as jml, DATE(created_at) as tgl FROM participants GROUP BY DATE(participants.created_at)');
        foreach($graph1 as $item1) {
            $weekday = HomeController::formathari(date("D", strtotime($item1->tgl)));
            $weekdays[] = $weekday;
            $weekday_val[] = $item1->jml;
        }
        // echo json_encode($weekday_val);
        return view('home')->with([
            'participants' => $participants,
            'generals' => $generals,
            'students' => $students,
            'payments' => $payments,
            'paid' => HomeController::getPaid(),
            'weekdays' => json_encode($weekdays),
            'weekday_val' => json_encode($weekday_val)
            ]);
    }

    static function getPaid() {
        $varified = DB::select('SELECT COUNT(*) as verified FROM `payments` WHERE payments.is_paid = 1');
        $not_varified = DB::select('SELECT COUNT(*) as not_verified FROM `payments` WHERE payments.is_paid = 0');
        $not_upload = DB::select('SELECT COUNT(*) as not_upload FROM `participants`');

        $not_upload = $not_upload[0]->not_upload - ($not_varified[0]->not_verified + $varified[0]->verified);
        $paid = array("verified" => $varified[0]->verified, 'not_verified' => $not_varified[0]->not_verified, 'not_upload' => $not_upload);

        return $paid;
    }

    static function formathari($hari_ini) {
        switch($hari_ini){
            case 'Sun':
                $hari_ini = "Minggu";
            break;

            case 'Mon':         
                $hari_ini = "Senin";
            break;

            case 'Tue':
                $hari_ini = "Selasa";
            break;

            case 'Wed':
                $hari_ini = "Rabu";
            break;

            case 'Thu':
                $hari_ini = "Kamis";
            break;

            case 'Fri':
                $hari_ini = "Jumat";
            break;

            case 'Sat':
                $hari_ini = "Sabtu";
            break;
            
            default:
                $hari_ini = "Tidak di ketahui";     
            break;
        }
        return $hari_ini;
    }
}
