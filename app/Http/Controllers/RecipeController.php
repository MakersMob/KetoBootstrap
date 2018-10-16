<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use KetoBootstrap\Recipe;
use KetoBootstrap\Tag;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $count = Recipe::count();
        $recipes = Recipe::orderBy('id', 'DESC')->paginate(50);
        $tags = Tag::orderBy('tag', 'ASC')->get();
        
        return view('recipe.index', compact('recipes', 'tags', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe = Recipe::create([
            'name' => $request->name,
            'description' => $request->description,
            'servings' => $request->servings,
            'serving_description' => $request->serving_description,
            'calories' => $request->calories,
            'protein' => $request->protein,
            'fat' => $request->fat,
            'carbs' => $request->carbs,
            'pinterest' => $request->pinterest,
            'source' => $request->source,
            'image' => $request->image,
        ]);

        $tags = explode(",", $request->tags);

        foreach($tags as $tag) {
            if(!empty($tag)) {
                $t = Tag::firstOrCreate(['tag' => strtolower(trim($tag))]);

                $recipe->tags()->attach($t->id);
            }
            
        }

        return redirect('recipe/'.$recipe->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::with(['ingredients' => function ($query) {
            $query->orderBy('item', 'ASC');
        }], 'instructions')->where('slug', $id)->firstOrFail();

        $r = Recipe::get();

        $rec = $r->shuffle();

        $recipes = $rec->slice(0,15);

        return view('recipe.show', compact('recipe', 'recipes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::find($id);
        //$recipe = Recipe::where('slug', $id)->firstOrFail();

        return view('recipe.edit', compact('recipe'));
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
        $recipe = Recipe::find($id);

        $recipe->name = $request->name;
        $recipe->description = $request->description;
        $recipe->servings = $request->servings;
        $recipe->calories = $request->calories;
        $recipe->serving_description = $request->serving_description;
        $recipe->protein = $request->protein;
        $recipe->fat = $request->fat;
        $recipe->carbs = $request->carbs;
        $recipe->pinterest = $request->pinterest;
        $recipe->source = $request->source;

        $recipe->save();

        $tags = explode(",", $request->tags);

        foreach($tags as $tag) {
            $t = Tag::firstOrCreate(['tag' => strtolower(trim($tag))]);

            $recipe->tags()->attach($t->id);
        }

        return redirect('recipe/'.$recipe->slug);
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
