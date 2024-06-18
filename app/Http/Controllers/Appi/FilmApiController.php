<?php

namespace App\Http\Controllers\Appi;

use App\Models\Film;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Helpers\MessageHelper;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FilmApiController extends Controller
{
    public function index()
    {
        $film = Film::get()
            ->map(function ($film) {
                return $this->format($film);
            });
        return $this->response($film);
    }

    public function tambah(Request $request){
        $validasi = Validator::make($request->all(), [
            'title' => 'required',
            'id_genre' => 'required',
            'id_platform' => 'required',
            'desc' => 'required',
            'year' => 'required',
            'duration' =>'required',
            'rating' => 'required',
        ]);

        // Ini Biar Ngasi Tau kalo datanya g bisa dikosongin berdasarkan index jd dia ngasi tau yg pertama kali paling awal salah yg mana
        if($validasi->fails()){
            $index = $validasi->errors()->all();
            // return $this->error(false, $index[0]);

            // yg ini kalo make helper jd dia bisa dipake g cmn disatu controller
            return MessageHelper::error(false, $index[0]);
        }

        $film = Film::create([
            'title' => $request->title,
            'id_genre' => $request->id_genre,
            'id_platform' => $request->id_platform,
            'slug' => Str::slug($request->nama),
            'desc' => $request->desc,
            'year' => $request->year,
            'duration' => $request->duration,
            'rating' => $request->rating,
        ]); 
        $film = Film::where('id', $film->id)
            ->get()
            ->map(function ($film) {
                return $this->format($film);
            });
        return $this->response($film);
        // return $this->response($request->all());
    }
 
    public function hapus(Request $request){

        $film = Film::where('id', $request->id)->first();

        if(!$film){
            return MessageHelper::error(true, 'Tidak Ada Data ');
        }

        $film->delete();

        return MessageHelper::error(true, 'Berhasil Hapus Data');
    }
    public function format($film){
        return [
            'id' => $film->id,
            'judul' => $film->title,
            // Kalo beda table panggil public function yg di modelnya trus nama field nya
            'genre' => $film->genre1->genre,
            'media' => $film->platform1->platform,
            'sinopsis' => $film->desc,
            'tahun' => $film->year,
            'durasi' => $film->duration,
            'rate' => $film->rating,
            'tanggal_tambah' => Carbon::parse($film->created_at)->translatedFormat('d F Y'),
        ];              
    }
    public function response($film){
        return response()->json([
            'status' => true,
            'data' => $film,
        ], 200);
    }
    
    public function error($status, $message){
        return response()->json([
            'status' => $status,
            'messages' => $message,
        ], 200);
        // 200 = Response::HTTP_OK(cara lama)  = Response::HTTP_NOT_FOUND(nanti dia tulisannya not found)
    }
}
