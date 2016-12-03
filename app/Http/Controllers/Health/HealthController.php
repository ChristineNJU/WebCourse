<?php

namespace App\Http\Controllers\Health;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HealthController extends Controller
{
    public function index(){
        return view('front.health_total');
    }

    public function sports(){
        return view('front.health_sports');
    }

    public function sleeps(){
        return view('front.health_sleep');
    }
}
