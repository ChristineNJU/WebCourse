<?php
/**
 * Created by PhpStorm.
 * User: yqq
 * Date: 2016.11.29
 * Time: 15:41
 */
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Page;
use App\moments;
use Input;
use DB;
use Auth;

use Redirect;

class PagesController extends Controller {

    public function show($id)
    {
        return view('pages.show')->withPage(Page::find($id));
    }

    public function moments(){
        $userId = Auth::user()['id'];

        $res = DB::select('SELECT moments.userid,moments.content,moments.updated_at,user_infos.nickname,user_infos.avatar
                        FROM moments LEFT JOIN user_infos on moments.userid = user_infos.userid
                        WHERE moments.userid in (SELECT applyer FROM friends WHERE applied = ? )
                          OR moments.userid = ?
                        ORDER BY moments.updated_at DESC ;',[$userId,$userId]);

        $count = DB::table('moments')->where('userid', $userId)->count();
        $friendCount = DB::table('friends')->where('applied',$userId)->where('status',0)->count();

        return view('front.moments')
            ->with('moments',$res)
            ->with('friendC',$friendCount)
            ->with('count',$count);
    }

    public function newMoment(){
        $user = Auth::user()->id;

        $date = date('Y-m-d H:i:s',time());
        DB::table('moments')->insert([
            'userid' => $user,
            'content' => $_POST['content'],
            'created_at' => $date,
            'updated_at' => $date,
        ]);


        $response = array(
            'status' => 'successhhhhh',
            'msg' => 'Article has been posted.',
            'content' => $_POST['content'],
        );
        return \Response::json($response);
    }

    public function que(){
        return '11111';
    }

}