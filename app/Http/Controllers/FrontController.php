<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use App\Models\Film;
use App\Models\Genre;
use App\Models\User;
use Inertia\Inertia;
use App\Models\Korea;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Console\CastMakeCommand;

class FrontController extends Controller
{

    public function signin()
    {
        return Inertia('login');
    }
    public function signup()
    {
        return Inertia('register');
    }
    public function home()
    {

        $user = User::all();
        $film = Film::with('genre1')->get();
        $korea = Korea::with('film1')->get();
        $year = Film::where('year', 2023)->get();

        return Inertia('HomeA', compact('film', 'user', 'korea', 'year'));
    }
    public function detail($id)
    {

        $user = User::all();
        $film = Film::with('genre1', 'platform1')->findOrFail($id);
        $korea = Korea::with('film1')->where('id_film', $id)->get();
        $cast = Cast::with('film1')->where('id_film', $id)->get();

        return Inertia('Detail', compact('film', 'user', 'cast'));
    }

    public function random()
    {

        $user = User::all();
        $cast = Cast::with('film1')->get();

        return Inertia('Random', compact('cast', 'user'));
    }
    public function contactUs()
    {

        $user = User::all();
        return Inertia('ContactUs', compact('user'));
    }
    public function aboutUs()
    {

        $user = User::all();
        return Inertia('AboutUs', compact('user'));
    }
    public function movie()
    {

        $user = User::all();
        $film = Film::with('genre1')->get();

        return Inertia('Movie', compact('user', 'film'));
    }
    public function action(Request $request)
    {
        $genre = Genre::all();
        $film = Film::where('id_genre', 1)->get();

        return Inertia('Movie', compact('film', 'genre'));
    }
    public function romance(Request $request)
    {
        $genre = Genre::all();
        $film = Film::where('id_genre', 5)->get();

        return Inertia('Movie', compact('film', 'genre'));
    }
    public function drama(Request $request)
    {
        $genre = Genre::all();
        $film = Film::where('id_genre', 8)->get();

        return Inertia('Movie', compact('film', 'genre'));
    }
    public function fantasy()
    {
        $genre = Genre::all();

        // Menggunakan relasi untuk mendapatkan film berdasarkan genre
        $films = Genre::find(3)->films;

        // Jika menggunakan Eloquent dan relasi diatur dengan benar, bisa digunakan sebagai berikut:
        // $genre = Genre::with('films')->find(3);
        // $films = $genre->films;

        return Inertia::render('Movie', ['film' => $films, 'genre' => $genre]);
    }

    public function search(Request $request)
    {
        if ($request->q != "") {
            //get products by keywords
            $film = Film::where('title', 'like', '%' . $request->q
                . '%')->get();
        } else {
            $film = [];
        }
        //return response
        return response()->json([
            'film' => $film,
        ]);
    }
}
