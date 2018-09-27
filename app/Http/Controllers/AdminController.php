<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use KetoBootstrap\User;

class AdminController extends Controller
{
    public function index()
    {

    	return view('admin.index');
    }
}
