<?php
/**
 * Created by PhpStorm.
 * User: yqq
 * Date: 2016.11.29
 * Time: 15:41
 */
namespace App\Http\Controllers;

use App\Page;

class PagesController extends Controller {

    public function show($id)
    {
        return view('pages.show')->withPage(Page::find($id));
    }

    public function moments(){
        return view('front.personalInfo');
    }

}