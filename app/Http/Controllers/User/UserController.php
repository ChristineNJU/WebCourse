<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        return view('front.personalInfo');
    }

    public function revisePW(){
        return view('front.revisePW');
    }
}
