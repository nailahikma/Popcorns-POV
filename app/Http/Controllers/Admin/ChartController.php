<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function chart() {

        $user = User::select(DB::raw("COUNT(*) as count"))
                ->groupBy(DB::raw("role"))
                ->pluck('count');
        return view('Admin.chart', compact('user'));
    }
}
