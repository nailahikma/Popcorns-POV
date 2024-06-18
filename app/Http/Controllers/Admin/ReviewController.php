<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        $review = Review::all();
        return view('Admin.Review.review', compact('review'));
    }

    public function addReview(Request $request){
        // dd($request->all());
    
        Review::create([
            'id_user' => $request->id_user,
            'id_film' => $request->id_film,
            'review' => $request->review,
        ]);

        return redirect()->back()->with('Create', 'Data has been added!');
    }
    public function deleteReview(Request $request) {

        $review = Review::findOrFail($request->id);
        $review->delete();

        return redirect()->back()->with('Delete', 'Data has been deleted!');
    }
}
