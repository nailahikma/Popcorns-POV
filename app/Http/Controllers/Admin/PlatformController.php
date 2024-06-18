<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cast;
use App\Models\Platform;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PlatformController extends Controller
{
    public function index(){
        $platform = Platform::all();
        return view('Admin.Platform.platform', compact('platform'));
    }

    public function addPlatform(Request $request){
        // dd($request->all());
    
        Platform::create([
            'platform' => $request->platform,
            'logo' => $request->file('logo')->store('img-platform'),
            'link' => $request->link,
        ]);

        return redirect()->back()->with('Create', 'Data has been added!');
    }
    public function deletePlatform(Request $request) {

        $platform = Platform::findOrFail($request->id);
        Storage::delete($platform->logo);
        $platform->delete();

        return redirect()->back()->with('Delete', 'Data has been deleted!');
    }
}
