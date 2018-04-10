<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $arr = array(
            'title'=>'Welcome to Laravel!',
            'detail'=>'This is Laravel Application.'
        );
        return view('pages.index')->with($arr);
    }

    public function about(){
        $arr = array(
            'title'=>'About Us',
            'detail'=>'This is About Us page.'
        );
        return view('pages.about')->with($arr);
    }

    public function services(){
        $arr = array(
            'title'=>'Services',
            'detail'=>'This is Services page.',
            'services'=>['Web Design','Programming','SEO']
        );
        return view('pages.services')->with($arr);
    }
}
