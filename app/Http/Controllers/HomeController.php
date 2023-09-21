<?php

namespace App\Http\Controllers;

use App\Models\UserVisit;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $storedIPs = Session::get('stored_ips', []);

        // dd(in_array($request->ip(), $storedIPs));
        $userIpAddress = $request->ip();;
        // $userIpAddress = "137.96.143.251";
        // dd($userIpAddress);
        if (!in_array($request->ip(), $storedIPs)) {

            $geoData = Http::get('http://ip-api.com/json/' . $userIpAddress)->json();
            // if ($geoData && $geoData['status'] === 'success') {

                UserVisit::create($geoData);
                $storedIPs[] = $request->ip();
                Session::put('stored_ips', $storedIPs);

            // }


        }


        return view('welcome');
    }

    public function aboutUs(){


        return view('aboutUs');
    }
}
