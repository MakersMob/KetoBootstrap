<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use KetoBootstrap\Tag;

class TagController extends Controller
{
    public function create()
    {
    	return view('tag.create');
    }

    public function store(Request $request)
    {
    	$tag = Tag::create([
    		'tag' => strtolower($request->tag)
    	]);

    	return redirect('tag/'.$tag->slug);
    }

    public function show($id)
    {
    	$tag = Tag::with('recipes')->where('slug', $id)->firstOrFail();

    	return view('tag.show', compact('tag'));
    }
}
