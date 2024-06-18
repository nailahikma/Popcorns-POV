<?php

namespace App\Http\Controllers\Admin;

use App\Models\Score;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScoreController extends Controller
{
    public function index(){
        $score = Score::all();
        return view('Admin.score.score', compact('score'));
    }

    public function addScore(Request $request){
        // dd($request->all());
    
        Score::create([
            'id_user' => $request->id_user,
            'id_film' => $request->id_film,
            'score' => $request->score,
        ]);

        return redirect()->back()->with('Create', 'Data has been added!');
    }
    public function deleteScore(Request $request) {

        $score = Score::findOrFail($request->id);
        $score->delete();

        return redirect()->back()->with('Delete', 'Data has been deleted!');
    }
}
