<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Recipe;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\View;

class RecipeController extends Controller
{
    use ValidatesRequests;

    public function index(){
        $recipes = Recipe::all();
        return view('index', ['recipes'=>$recipes]);
    }
    public function create(Request $request){
        $this->validate($request,[
            'author' => 'required', 
            'title'=>'required|min:5|max:100',
            'text' => 'required'
        ]);
        $recipe = new Recipe();
        $recipe->user_id = Auth::user()->id;
        $recipe->title = $request['title'];
        $recipe->text = $request['text'];        
        $recipe->save();
        return redirect()->route('recipes.index');
    }

    public function add(){
        return view('add-recipe');
    }

    public function info($id){
        $recipe = Recipe::find($id);
        return view('single', ['recipe' => $recipe]);
    }

    public function edit($id){
        $recipe = Recipe::find($id);
        return view('edit-recipe',['recipe'=>$recipe]);
    }

    public function update($id, Request $request){
        $recipe = Recipe::find($id)
        ->update(['text' => $request['text']]);
        return redirect()->route('recipes.index');
    }

    public function delete($id){
        $recipe = Recipe::find($id);
        $recipe->delete();
        return redirect()->route('recipes.index');
    }
    
}
