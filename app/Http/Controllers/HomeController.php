<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\User;
use Str;
use Session;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }
    public function about() {
        return view('about');
    }
    public function faq() {
        return view('faq');
    }
    public function login() {
        if(!Session::has('id')) {
            return view('login');
        }
        else {
            return redirect('/main');
        }
    }
    public function register() {
        if(!Session::has('id')) {
            return view('register');
        }
        else {
            return redirect('/main');
        }
    }
    public function forgetPassword() {
        if(!Session::has('id')) {
            return view('forget-password');
        }
        else {
            return redirect('/main');
        }
    }


    public function saveInfo(Request $req) {    
        $req->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $uid = Str::random(16);
        while (User::where('uid', $uid)->exists()) {
            $uid = Str::random(16);
        }
        $user = new User;
        $user->uid = $uid;
        $user->username = $req->username;
        $user->email = $req->email;
        $user->pwd = Hash::make($req->password);
        $user->save();
        
        Session::put('id', $user->id);
        Session::put('uid', $user->uid);
        Session::put('username', $user->username);
        Session::put('email', $user->email);
        return redirect('/main');
        // session()->flash('success', "Registered Successfully.");
        // return redirect()->back();
    }
    public function auth(Request $req) {
        $req->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $req->username)->orWhere('username', $req->username)->first();

        if ($user && Hash::check($req->password, $user->pwd)) {
            Session::put('id', $user->id);
            Session::put('uid', $user->uid);
            Session::put('username', $user->username);
            Session::put('email', $user->email);
            return redirect('/main');
        }
        else {
            session::flash('error','Invalid username or password');
            return redirect()->back();
        }
    }
    public function logout() {
        Session::forget('id');
        Session::forget('uid');
        Session::forget('username');
        Session::forget('email');
        session::flash('error','Logged out successfully!');
        return redirect('/login');
    }
}