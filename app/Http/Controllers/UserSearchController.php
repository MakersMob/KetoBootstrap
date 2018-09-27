<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use KetoBootstrap\User;

class UserSearchController extends Controller
{
    public function show(Request $request)
    {
    	$users = User::search($request->search)->get();
    	$search = $request->search;

    	return view('search.users.show', compact('users', 'search'));
    }
}
