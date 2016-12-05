<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use DB;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FriendController extends Controller
{
    public function index(){
        $userId = Auth::user()['id'];
        $count = DB::table('friends')->where('applied', $userId)->where('status',1)->count();
        $res = DB::select('SELECT friends.applyer,user_infos.nickname,user_infos.avatar
FROM friends LEFT JOIN user_infos on friends.applyer = user_infos.userid
WHERE friends.applied = ? AND friends.status = 0',[$userId]);

//        $count = DB::table('moments')->where('userid', $userId)->count();


        return view('front.personalFriends')
            ->with('friends',$res)
            ->with('count',$count);
    }

    public function applies(){
        $user = Auth::user()->id;
        $res = DB::select('SELECT friends.applyer,user_infos.nickname,user_infos.avatar,friends.status
FROM friends LEFT JOIN user_infos on friends.applyer = user_infos.userid
WHERE friends.applied = ? AND (friends.status = 1 OR friends.status = 2)',[$user]);

        $count = DB::table('friends')->where('applied', $user)->where('status',1)->count();


        return view('front.personalFriends_apply')
            ->with('applies',$res)
            ->with('count',$count);
    }

    public function deleteFriend(){
        $user = Auth::user()->id;
        $applyer = $_POST['deleteid'];
        DB::delete('delete from friends where applyer = ? and applied = ?',[$applyer,$user]);

        $response = array(
            'status' => 'success',
            'received' => $applyer
        );
        return \Response::json($response);
    }

    public function agree(){
        $user = Auth::user()->id;
        $passive = $_POST['passive'];

        DB::update('UPDATE friends SET status = 0 WHERE applyer=? AND applied = ?;',[$passive,$user]);

        $response = array(
            'status' => 'success',
            'received' => $passive
        );
        return \Response::json($response);

    }

    public function disagree(){
        $user = Auth::user()->id;
        $passive = $_POST['passive'];
        DB::update('UPDATE friends SET status = 2 WHERE applyer=? AND applied = ?;',[$passive,$user]);

        $response = array(
            'status' => 'success',
            'received' => $passive
        );
        return \Response::json($response);
    }

}
