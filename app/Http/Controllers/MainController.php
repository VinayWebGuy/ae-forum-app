<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('main.index');
    }
    public function topTags()  {
        return view('main.topTags');
    }
    public function activity()  {
        return view('main.acitvity');
    }
    public function topQueries()  {
        return view('main.topQueries');
    }
    public function account()  {
        return view('main.account');
    }
    public function subscription()  {
        return view('main.subscription');
    }
    public function myQueries()  {
        return view('main.myQueries');
    }
    public function myResponses()  {
        return view('main.myResponses');
    }
}