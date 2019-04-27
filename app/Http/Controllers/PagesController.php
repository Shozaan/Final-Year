<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='Welcome to laravel!';
        return view('pages.index',compact('title'));
    }
    public function popular(){
        $title='Popuar Sites';
        return view('pages.popular',compact('title'));
    }
    public function stay(){
        $title='Lets Relax!';
        return view('pages.stay',compact('title'));
    }
    public function about(){
        $title='About!';
        return view('pages.about',compact('title'));
    }
    public function services(){
        $data=array(
            'title'=> 'Football',
            'services'=>[]
        );
        return view('pages.services')->with($data);
    }
}
