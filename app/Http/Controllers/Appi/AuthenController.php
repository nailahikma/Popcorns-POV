<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Helpers\MessageHelper;
use App\Helpers\FormatHelper;
use App\Http\Controllers\Controller;
use App\Models\Guest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthenController extends Controller
{
    public function register(Request $request){
        
        $validasi = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if($validasi->fails()){
            $index = $validasi->errors()->all();
            // return $this->error(false, $index[0]);

            // yg ini kalo make helper jd dia bisa dipake g cmn disatu controller
            return MessageHelper::error(false, $index[0]);
        }

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Guest::create([
            'user_id' =>$user->id
        ]);

        $detail = FormatHelper::mapResultUser($user->id);

        $pesan = "Berhasil Regis";
        return MessageHelper::resultAuth(true, $pesan, $detail, 200);
    }

    public function login(Request $request){
        
        $validasi = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if($validasi->fails()){
            $index = $validasi->errors()->all();
            return MessageHelper::error(false, $index[0]);
        }

        $user = User::where('email', $request->email)->first();

        if($user){
            if(password_verify($request->password, $user->password)){
                $detail = FormatHelper::mapResultUser($user->id);
                $pesan = "Berhasil Login";
                return MessageHelper::resultAuth(true, $pesan, $detail, 200);
        
            }else {
                return MessageHelper::error(false,'Password Salah');
            }
        }else{
            return MessageHelper::error(false, "Akun Tidak Ada");
        }

        
    }
}
