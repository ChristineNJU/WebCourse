<?php

namespace App\Http\Controllers\Activity;

use Illuminate\Http\Request;

use DB;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Activity\GetActivity;

class ActivityController extends Controller
{
    public function index($type){
//        $userId = Auth::user()['id'];
//
//        $res = DB::select('select * from competitions order by created_at DESC');
//        $count = DB::table('competition_p_ts')->where('userid',$userId)->count();

        $test=GetActivity::get($type);
        return $test;
//        return view('front.competition_all')
//            ->with('comps',$res)
//            ->with('count',$count)
//            ;
    }

    public function detail($id){

        $userId = Auth::user()['id'];
        $count = DB::table('competition_p_ts')->where('userid',$userId)->count();
        $res = DB::select('SELECT competitions.id,competitions.title,competitions.content,competitions.peopleAll,competitions.peopleHave,
  competitions.begin,competitions.end,competitions.created_at,user_infos.nickname,user_infos.avatar,competitions.authorid
FROM competitions left JOIN user_infos ON competitions.authorid = user_infos.userid
WHERE competitions.id = ?;',[$id]);

        $participates = DB::select('SELECT competition_p_ts.comid,competition_p_ts.userid,user_infos.avatar,user_infos.nickname
FROM competition_p_ts LEFT JOIN user_infos  ON competition_p_ts.userid = user_infos.userid
WHERE competition_p_ts.comid = ?;',[$id]);

        $canP = 1;
        if($res[0]->peopleHave == $res[0]->peopleAll){
            $canP = 0;
        }
        if($res[0]->authorid == $userId){
            $canP = 0;
        }
        return view('front.competition_detail')
            ->with('comp',$res[0])
            ->with('canP',$canP)
            ->with('ps',$participates)
            ->with('count',$count)
            ;
    }

    public function participate(){
        $userId = Auth::user()['id'];
        $id = $_POST['id'];
        $date = date('Y-m-d H:i:s',time());

        DB::update('update competitions set peopleHave=peopleHave+1 where id=?',[$id]);
//        DB::insert('insert into competition_p_ts values(?,?,?,?)'.[$id,$userId,$date,$date]);
        DB::table('competition_p_ts')->insert(
            array('comid' => $id, 'userid' => $userId,'created_at'=>$date,'updated_at'=>$date)
        );
        $response = array(
            'status' => 'success',
            'received' => $id
        );
        return \Response::json($response);
    }

    public function newActivity(){
        $userId = Auth::user()['id'];
        $count = DB::table('competition_p_ts')->where('userid',$userId)->count();
        return view('front.competition_new')
            ->with('count',$count)
            ;
    }

    public function editActivity(){
        return view('front.competition_edit');
    }

    public function createActivity(){
        $userId = Auth::user()['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $peopleAll = $_POST['peopleAll'];
        $begin = $_POST['begin'];
        $end = $_POST['end'];
        $date = date('Y-m-d H:i:s',time());

        $id = DB::table('competitions')->insertGetId(
            array(
                'authorid' => $userId,
                'title' => $title,
                'begin'=>$begin,
                'end'=>$end,
                'content'=>$content,
                'peopleHave'=>1,
                'peopleAll'=>$peopleAll,
                'created_at'=>$date,
                'updated_at'=>$date)
        );

        DB::table('competition_p_ts')->insert(
            array(
                'comid' => $id,
                'userid' => $userId,
                'created_at'=>$date,
                'updated_at'=>$date)
        );

        $response = array(
            'status' => 'success',
            'received' => $title
        );
        return \Response::json($response);

    }
}
