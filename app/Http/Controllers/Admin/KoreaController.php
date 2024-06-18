<?php

namespace App\Http\Controllers\Admin;

use App\Models\Film;
use App\Models\Korea;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KoreaController extends Controller
{
    public function index()
    {

        $film = Film::all();
        $korea = Korea::all();

        return view('Admin.Korea.korea', compact('korea', 'film'));
    }

    public function addKorea(Request $request)
    {
        // dd($request->all());

        Korea::create([
            'id_film' => $request->id_film,
        ]);

        return redirect()->back()->with('Create', 'Data has been added!');
    }
    public function deleteKorea(Request $request)
    {

        $korea = Korea::findOrFail($request->id);
        $korea->delete();

        return redirect()->back()->with('Delete', 'Data has been deleted!');
    }
}
