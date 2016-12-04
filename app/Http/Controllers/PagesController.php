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
use Input;

use Auth;

use Redirect;

class PagesController extends Controller {

    public function show($id)
    {
        return view('pages.show')->withPage(Page::find($id));
    }

    public function moments(){
        return view('front.moments');
    }

    public function newMoment(\Request $request){
        $user = Auth::user();
        $response = array(
            'status' => 'successhhhhh',
            'msg' => 'Article has been posted.',
            'other' => $user['id'],
        );
        return \Response::json($response);
    }

    public function que(){
        return '11111';
    }

}