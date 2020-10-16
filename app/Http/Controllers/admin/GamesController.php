<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Games;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index()
    {
        $games = Games::orderBy('view_order')->get();
        return view('dashboard.admin.gamesList')->with(['games' => $games]);
    }
    public function create(Request $request)
    {
        die($request);
        $games = Games::orderBy('view_order')->get();
        return view('dashboard.admin.gamesList')->with(['games' => $games]);
    }
    public function update(Request $request)
    {
        die($request);
        $games = Games::orderBy('view_order')->get();
        return view('dashboard.admin.gamesList')->with(['games' => $games]);
    }
    public function delete(Request $request)
    {
        die($request);
        $games = Games::orderBy('view_order')->get();
        return view('dashboard.admin.gamesList')->with(['games' => $games]);
    }
    // public function upload(Request $request)
    // {
    //     $folderPath = public_path('upload/');

    //     $image_parts = explode(";base64,", $request->image);
    //     $image_type_aux = explode("image/", $image_parts[0]);
    //     $image_type = $image_type_aux[1];
    //     $image_base64 = base64_decode($image_parts[1]);
    //     $file = $folderPath . uniqid() . '.png';

    //     file_put_contents($file, $image_base64);

    //     return response()->json(['success' => 'success']);
    // }
}
