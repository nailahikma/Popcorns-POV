<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashController extends Controller
{
    public function admin() {

        $user = User::count();
        return view('Template.index', compact('user'));
        
    }
}
