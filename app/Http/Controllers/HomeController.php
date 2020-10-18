<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role;
        $redirectTo = '/login';
        switch ($role) {
            case 'admin':
                $redirectTo = '/admin';
                break;
            case 'user':
                $redirectTo = '/user';
                break;
            default:
                break;
        }
        return redirect($redirectTo);
    }
}
