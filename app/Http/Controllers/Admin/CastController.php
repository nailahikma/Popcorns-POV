<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cast;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Support\Facades\Storage;

class CastController extends Controller
{
    public function index(){

        $film = Film::all();
        $cast = Cast::all();

        return view('Admin.Cast.cast', compact('cast', 'film'));
    }

    public function addCast(Request $request){
        // dd($request->all());
    
        Cast::create([
            'id_film' => $request->id_film,
            'cast' => $request->cast,
            'img_cast' => $request->file('img_cast')->store('img_cast'),
            'role_name' => $request->role_name,
        ]);

        return redirect()->back()->with('Create', 'Data has been added!');
    }
    public function deleteCast(Request $request) {

        $cast = Cast::findOrFail($request->id);
        Storage::delete($cast->img_cast);
        $cast->delete();

        return redirect()->back()->with('Delete', 'Data has been deleted!');
    }
}
