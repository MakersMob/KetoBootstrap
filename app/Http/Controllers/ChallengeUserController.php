<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use KetoBootstrap\Challenge;
use Auth;

class ChallengeUserController extends Controller
{
    public function store($id)
    {
    	$challenge = Challenge::find($id);

    	$challenge->users()->attach(Auth::user()->id);

    	return redirect('challenge/'.$challenge->slug);
    }

    public function update($id)
    {
        $challenge = Challenge::find($id);

        $challenge->users()->updateExistingPivot(Auth::user()->id, ['created_at' => now(), 'updated_at' => now()]);

        return redirect('challenge/'.$challenge->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $challenge = Challenge::find($id);

        $challenge->users()->detach(Auth::user()->id);

        return redirect('challenge/'.$challenge->slug);
    }
}
