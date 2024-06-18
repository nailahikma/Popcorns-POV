<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cast;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Score;
use App\Models\Review;
use App\Models\Platform;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    public function index()
    {
        $film = Film::all();
        return view('Admin.Film.film', compact('film'));
    }

    public function formc()
    {

        $genre = Genre::all();
        $platform = Platform::all();
        $cast = Cast::all();
        $review = Review::all();
        $score = Score::all();

        return view('Admin.Film.formc', compact('genre', 'platform', 'cast', 'review', 'score'));
    }

    public function addFilm(Request $request)
    {
        Film::create([
            'trailer' => $request->trailer,
            'cover' => $request->cover,
            'bg' => $request->bg,
            'title_img' => $request->title_img,
            'title' => $request->title,
            'year' => $request->year,
            'duration' => $request->duration,
            'desc' => $request->desc,
            'id_platform' => $request->id_platform,
            'rating' => $request->rating,
            'id_genre' => $request->id_genre,
            'director' => $request->director,
            'slug' => Str::slug($request->title),
        ]);

        return redirect()->route('index.film')->with('Create', 'Data has been added!');
    }

    public function forme($id)
    {
        $film = Film::findOrFail($id);
        $genre = Genre::all();
        $platform = Platform::all();

        return view('Admin.Film.forme', compact('film', 'genre', 'platform'));
    }

    public function editFilm(Request $request, $id)
    {
        $film = Film::findOrFail($id);

        $film->trailer = $request->trailer;
        $film->cover = $request->cover;
        $film->bg = $request->bg;
        $film->title_img = $request->title_img;
        $film->title = $request->title;
        $film->year = $request->year;
        $film->duration = $request->duration;
        $film->id_platform = $request->id_platform;
        $film->desc = $request->desc;
        $film->rating = $request->rating;
        $film->id_genre = $request->id_genre;
        $film->director = $request->director;
        $film->slug = Str::slug($request->title);


        $film->update();
        return redirect()->route('index.film')->with('Update', "Data $request->title Berhasil Diupdate");
    }
    public function deleteFilm(Request $request)
    {

        $film = Film::findOrFail($request->id);
        $film->delete();

        return redirect()->back()->with('Delete', 'Data has been deleted!');
    }
}
