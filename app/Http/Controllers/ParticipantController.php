<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.participants.index')->with([
            'participants' => \App\Participant::all(),
            'students' => \App\Student::all(),
            'generals' => \App\General::all(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.participants.create');
    }

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
    public function show($id)
    {
        $participant = \App\Participant::findOrFail($id);
        return view('admin.participants.show', compact('participant'))->renderSections()['dashboard'];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $participant = \App\Participant::findOrFail($id);
        return view('admin.participants.edit', compact('participant'))->renderSections()['dashboard'];
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
        $participant = \App\Participant::indOrFail($id);
        $participant->email = $request->input('email');
        $participant->password = bcrypt($request->input('email'));
        $participant->save();

        return redirect()->route('admin.participants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $participant = \App\Participant::indOrFail($id);
        $participant->delete();
        return redirect()->route('admin.participants');
    }
}
