<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Redirect, Input;

class AdminController extends Controller{
    public function index(){
        return view('back.admin');
    }

    public function edit(){
        return view('back.adminUpdate');
    }
}