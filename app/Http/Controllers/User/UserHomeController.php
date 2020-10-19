<?php

namespace App\Http\Controllers\User;

use App\HTTP\Controllers\Controller;
use App\Models\Games;

class UserHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['games']= Games::orderBy('view_order')->get();
        return view('user.home')->with($data);
    }
}
