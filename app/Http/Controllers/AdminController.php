<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use KetoBootstrap\User;

class AdminController extends Controller
{
    public function index()
    {
    	$users = User::get();

    	return view('admin.index', compact('users'));
    }
}
