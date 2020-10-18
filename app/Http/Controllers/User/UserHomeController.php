<?php

namespace App\Http\Controllers\User;

use App\HTTP\Controllers\Controller;

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
        return view('cropper');
    }
}
