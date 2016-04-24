<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LandingController extends Controller
{
    public function getLanding()
    {
        return view('landing.landing');
    }
}
