<?php

namespace App\Listeners;

use App\Models\Events;
use Auth;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Session;
use Request;
use Browser;
use Location;

class LoginSuccessful
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $device = 'Other';
        if (Browser::isMobile()) $device = "Mobile";
        if (Browser::isDesktop()) $device = "Desktop";
        if (Browser::isTablet()) $device = "Tablet";

        $ip = Request::ip();
        if (env('APP_ENV') == 'local') $ip = '158.43.136.32';
        $location = Location::get($ip);
        if (!$location)
            $location = array(
                "ip" => $ip,
                "countryName" => "Unknown",
                "countryCode" => "Unknown",
                "regionCode" => "Unknown",
                "regionName" => "Unknown",
                "cityName" => "Unknown",
                "zipCode" => "Unknown",
                "isoCode" => "Unknown",
                "postalCode" => "Unknown",
                "latitude" => "Unknown",
                "longitude" => "Unknown",
                "metroCode" => "Unknown",
                "areaCode" => "Unknown",
                "driver" => "Unknown"
            );

        Events::insert([
            'user_id' => Auth::user()->id,
            'type' => 'login',
            'value' => '',
            'device_type' => $device,
            'browser' => Browser::browserFamily(),
            'location' => json_encode($location),
            'ip' => $ip,
        ]);
        // Session::flash('login-success', 'Hello ' . $event->user->name . ', welcome back!');
    }
}
