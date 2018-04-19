<?php

namespace App\Http\Controllers;
use App\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Ilumninate\Support\Facades\View;

class ReviewController extends Controller
{
    use ValidatesRequests;
    public function create(Request $request){
        $this->validate($request, [
            'text' => 'required',
            'rating' => 'min:1|max:5'
        ]);
        $review = new Review();
        $review->user_id = Auth::user()->id;
        $review->recipe_id = $request['recipe_id'];
        $review->text = $request['text'];
        $review->rating = $request['rating'];
        $review->save();
        return redirect()->route('recipes.info', ['id' => $request['recipe_id']]);
    }

    public function delete($id){
        $review = Review::find($id);
        $review->delete();
        return redirect()->route('recipes.info',['id' => $review->recipe_id]);
    }
}
