<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function Profile(){
    	return view('guest.profile');
    }

    public function login(){
    	return view('guest.loginuser');
    }

    public function regis(){
    	return view('guest.register');
    }

    public function home(){
    	return view('guest.welcome');
    }
}
