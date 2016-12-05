<?php
/**
 * Created by PhpStorm.
 * User: yqq
 * Date: 2016.12.5
 * Time: 11:20
 */

namespace App\Http\Controllers\Activity;
use DB;
use Auth;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

abstract class GetActivity{
    //抽象方法不能包含函数体
    //强烈要求子类必须实现该功能函数
    public static function get($type){
        $userId = Auth::user()['id'];
        $count = DB::table('competition_p_ts')->where('userid',$userId)->count();

        if($type == 'self'){
            $res = DB::select('select * from competitions where authorid = ? order by created_at DESC',[$userId]);
            return view('front.competition_all')
                ->with('comps',$res)
                ->with('count',$count)
                ;
        }else{
            $res = DB::select('select * from competitions order by created_at DESC');
            return view('front.competition_all')
                ->with('comps',$res)
                ->with('count',$count)
                ;
        }

    }
}
