<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use KetoBootstrap\Journal;
use Auth;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journals = Journal::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();

        return view('journal.index', compact('journals'));
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
        $journal = Journal::create([
            'challenge_id' => $request->challenge_id,
            'emotions' => $request->emotions,
            'wins' => $request->wins,
            'hiccups' => $request->hiccups,
            'food' => $request->food,
            'weight' => $request->weight,
            'waist' => $request->waist,
            'thighs' => $request->thighs,
            'hips' => $request->hips,
            'butt' => $request->butt,
            'arms' => $request->arms,
            'chest' => $request->chest,
            'sleep' => $request->sleep,
            'user_id' => Auth::user()->id,
        ]);

        return redirect('/journal');
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
