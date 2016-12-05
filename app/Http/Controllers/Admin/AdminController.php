<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Redirect, Input;



class AdminController extends Controller{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $res = DB::select('select * from competitions order by created_at DESC');

        return view('back.admin')
            ->with('comps',$res)
            ;
    }

    public function edit($id){

        $res = DB::select('SELECT * from competitions where id=?',[$id]);
        return view('back.adminUpdate')
            ->with('comp',$res[0])
            ;
    }
    public function deleteA(){

        $comid = $_POST['id'];

        DB::delete('delete from competitions where id = ?',[$comid]);
        $response = array(
            'status' => 'success',
            'received' => $comid
        );
        return \Response::json($response);
    }
    public function updateA(){

        $title = $_POST['title'];
        $content = $_POST['content'];
        $peopleAll = $_POST['peopleAll'];
        $begin = $_POST['begin'];
        $end = $_POST['end'];
        $id = $_POST['id'];
        $date = date('Y-m-d H:i:s',time());

        DB::update('update competitions set title=?,content=?,peopleAll=?,begin=?,end=?
                where id=?',[$title,$content,$peopleAll,$begin,$end,$id]);

        $response = array(
            'status' => 'success',
            'received' => $id
        );
        return \Response::json($response);
    }
}