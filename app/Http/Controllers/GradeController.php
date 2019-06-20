<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = \App\Payment::getStudentPaymentsPaid();
        $generals = \App\Payment::getGeneralPaymentsPaid();
        $grade_students = \App\Grade::join('participants', 'participants.id', '=', 'grades.participant_id')
                ->join('students', 'students.participant_id', 'participants.id')
                ->where('participants.is_student', 1)->get();
        $grade_generals = \App\Grade::join('participants', 'participants.id', '=', 'grades.participant_id')
                ->join('generals', 'generals.participant_id', 'participants.id')
                ->where('participants.is_student', 0)->get();
        // dd($grade_generals);   
        return view('admin.grades.index')->with([
            'students' => $students,
            'generals' => $generals,
            'grade_students' => $grade_students,
            'grade_generals' => $grade_generals
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grade = new \App\Grade();
        $grade->participant_id = $request->participant_id;
        $grade->listening = $request->listening;
        $grade->grammar = $request->grammar;
        $grade->reading = $request->reading;
        $a = (int) $request->listening;
        $b = (int) $request->grammar;
        $c = (int) $request->reading;
        $total = $a + $b + $c;
        $grade->total_score = $total;
        $grade->save();

        $payment = \App\Payment::find($grade->participant_id);
        $payment->status = 2;
        $payment->save();

        return redirect('grades');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
