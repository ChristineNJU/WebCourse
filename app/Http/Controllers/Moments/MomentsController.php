<?php

namespace App\Http\Controllers\Moments\MomentsController;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MomentsController extends Controller
{
    public function index(){
        return view('front.personalInfo');
    }

}