<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
    	return view('admin/dashboard.index');
    }

    public function login(){
    	return view('admin.login');
    }

    public function calon(){
    	return view('admin/calon.index');
    }

    public function editcalon(){
    	return view('admin/calon.edit');
    }

    public function createcalon(){
        return view('admin/calon.create');
    }

}
