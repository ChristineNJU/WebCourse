<?php

namespace App\Http\Controllers\MomentsController;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\moments;

class MomentsController extends Controller
{
    public function index(){
        return view('front.moments');
    }

    public function show(){
        echo('hhhhhhhh');
//        return view('front.moments');
    }
}
