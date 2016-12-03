<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FriendController extends Controller
{
    public function index(){
        return view('front.personalFriends');
    }

    public function applies(){
        return view('front.personalFriends_apply');
    }
}
