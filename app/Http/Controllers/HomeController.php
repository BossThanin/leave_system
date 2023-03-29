<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $role=Auth::user()->role;

        if($role=='0'){
            return view('admin');
        }
        if($role=='1'){
            return view('project');
        }
        if($role=='2'){
            return view('employee');
        }
        else{
            return view('dashboard');
        }
    }
}
