<?php

namespace App\Http\Controllers\Admin;

use App\Models\Genre;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GenreController extends Controller
{
    public function index()
    {
        $genre = Genre::all();
        return view('Admin.Genre.genre', compact('genre'));
    }

    public function addGenre(Request $request){
        // dd($request->all());
    
        $genre = Genre::all();
        Genre::create([
            'genre' => $request->genre,
            'slug' => Str::slug($request->genre),
        ]);

        return redirect()->back()->with('Create', 'Data has been added!');
    }
    public function deleteGenre(Request $request) {

        $genre = genre::findOrFail($request->id);
        $genre->delete();

        return redirect()->back()->with('Delete', 'Data has been deleted!');
    }
}
