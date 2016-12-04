<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use DB;
use App\User;
use App\UserInfo;

class UserController extends Controller
{
    public function index(){
        $userid = Auth::user()->id;
        $user = DB::table('user_infos')->where('userid', $userid)->get();
        $name = DB::table('users')->select('name')->where('id',$userid)->get();
//        return $name;
        return view('front.personalInfo')
            ->with('user',$user[0])
            ->with('name',$name[0]->name);
    }

    public function revisePW(){
        return view('front.personalInfo_revisePW');
    }
}
