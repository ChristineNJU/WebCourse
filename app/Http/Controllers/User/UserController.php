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
        $friendCount = DB::table('friends')->where('applied',$userid)->where('status',0)->count();
        $momentCount = DB::table('moments')->where('userid',$userid)->count();

//        return $name;
        return view('front.personalInfo')
            ->with('user',$user[0])
            ->with('name',$name[0]->name)
            ->with('friendC',$friendCount)
            ->with('momentsC',$momentCount);
    }

    public function revisePW(){
        return view('front.personalInfo_revisePW');
    }

    public function reviseInfo(){
        $userid = Auth::user()->id;
        $nickname = $_POST['nickname'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];

        DB::update('update user_infos set nickname=?,address=?,gender=? where userid=?',
            [$nickname,$address,$gender,$userid]);
        $response = array(
            'status' => 'success'
        );
        return \Response::json($response);
    }
}
