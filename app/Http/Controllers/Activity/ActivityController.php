<?php

namespace App\Http\Controllers\Activity;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
    public function index(){
        return view('front.competition_all');
    }

    public function detail($id){
//        echo($id);
        return view('front.competition_detail');
    }

    public function newActivity(){
//        echo($id);
        return view('front.competition_new');
    }
}
