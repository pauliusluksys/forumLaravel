<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
class LocationController extends Controller
{
    public function index(Request $request)
    {
        $userIp = $request->header('X-Forwarded-For');
        $locationData = Location::get($userIp);

        dd();
    }
}
