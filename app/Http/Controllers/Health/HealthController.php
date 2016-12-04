<?php

namespace App\Http\Controllers\Health;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\Sleeps;
use App\Sports;
use App\Healths;

class HealthController extends Controller
{
    public function index(){
        $userId = Auth::user()['id'];
//        $health = DB::select('select * from healths where id = ?', [1]);

        $health = Healths::where('userid', 1)->orderBy('date','DESC')->get();
//        $array = (array)$health;
        $array = $health[0];
        return view('front.health_total')->
            with('health',$array);
    }

    public function getData(){
        $userId = Auth::user()['id'];
        $health = Healths::where('userid', 1)->orderBy('date','DESC')->get();
        $response = array(
            'data' => $health
        );
        return \Response::json($health[0]);
    }

    public function sports(){
        return view('front.health_sports');
    }

    public function sleeps(){
        return view('front.health_sleep');
    }

    public function sleepData($date){
        $userId = Auth::user()['id'];

        $data = Sleeps::where('userid', $userId)->where('date', $date.' 00:00:00')->get();
        if($data->count()){
            $data = $data[0];
            $response = array(
                'data' => $data,
                'id' => $userId
            );
        }else{
            $response = array(
                'data' => null,
                'id' => $userId
            );
        }

        return \Response::json($response);
    }

    public function sportsData($date){
        $userId = Auth::user()['id'];

        $data = Sports::where('userid', $userId)->where('date', $date.' 00:00:00')->get();
        if($data->count()){
            $data = $data[0];
            $response = array(
                'data' => $data,
                'id' => $userId
            );
        }else{
            $response = array(
                'data' => null,
                'id' => $userId
            );
        }

        return \Response::json($response);
    }
}
