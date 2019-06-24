<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Fcm;

class PaymentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $public = base_path().'/public/images/';
        return view('admin.payments.index')->with([
            'student_payments' => \App\Payment::getStudentPayments(),
            'general_payments' => \App\Payment::getGeneralPayments(),
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $payment = \App\Payment::findOrFail($id);
        
        return view('admin.payments.show', compact(['payment']))->renderSections()['dashboard'];
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
        $payment = \App\Payment::findOrFail($id);
        $payment->status = 1;
        $payment->save();

        $participant = \App\Participant::find($payment->participant_id);
        $recp[] = $participant->fcm_token;

        $setting = \App\Setting::find(1);
        Fcm::to($recp)->notification([
            'title' => 'EAPT UNIPMA',
            'body' => $setting->message_payment_success
        ])->send();

        return redirect('payments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment = \App\Payment::findOrFail($id);
        $payment->delete();

        $participant = \App\Participant::find($payment->participant_id);
        $recp[] = $participant->fcm_token;

        $setting = \App\Setting::find(1);
        Fcm::to($recp)->notification([
            'title' => 'EAPT UNIPMA',
            'body' => $setting->message_payment_failed
        ])->send();


        return redirect('payments');
    }

    public function acc($id)
    {
        $payment = \App\Payment::findOrFail($id);
        $payment->status = 1;
        $payment->save();
        return redirect('payments');
    }


}
