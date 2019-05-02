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
    public function anything(){
        $title='About!';
        return view('pages.anything',compact('title'));
    }
    public function pashupathi(){
        $title='About!';
        return view('pages.pashupathi',compact('title'));
    }
    public function bouddha(){
        $title='About!';
        return view('pages.bouddha',compact('title'));
    }
    public function sawaymbhu(){
        $title='About!';
        return view('pages.sawaymbhu',compact('title'));
    }
    public function basantapur(){
        $title='About!';
        return view('pages.basantapur',compact('title'));
    }
    
    public function thamel(){
        $title='About!';
        return view('pages.thamel',compact('title'));
    }
    public function lazimpat(){
        $title='About!';
        return view('pages.lazimpat',compact('title'));
    }
    public function sundhara(){
        $title='About!';
        return view('pages.sundhara',compact('title'));
    }
    public function durbarmarg(){
        $title='About!';
        return view('pages.durbarmarg',compact('title'));
    }
    public function chandragiri(){
        $title='About!';
        return view('pages.chandragiri',compact('title'));
    }
}
