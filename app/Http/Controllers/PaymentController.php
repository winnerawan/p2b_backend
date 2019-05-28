<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $public = base_path().'/public/images/';
        $path = $public;
        $vision = 'XXX';
        return view('admin.payments.index')->with([
            'student_payments' => \App\Payment::getStudentPayments(),
            'general_payments' => \App\Payment::getGeneralPayments(),
            'path' => $path,
            'vision' => $vision
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
        $payment->is_paid = 100;
        $public = base_path().'/public/images/';
        $path = $public . $payment->proof_image;
        $file = File::get($path);
        $type = File::mimeType($path);
        
        $vision = 'AAAAA';
        return view('admin.payments.show', compact(['vision', 'path', 'payment']))->renderSections()['dashboard'];
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
