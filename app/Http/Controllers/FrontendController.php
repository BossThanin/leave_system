<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index(){
        return view('work.index');
    }

    public function form(){
        return view('work.form');
    }
    public function req_list(){
        return view('work.req_list');
    }
    public function req_list_detail(){
        return view('work.req_list_detail');
    }

    public function rep_list(){
        return view('work.rep_list');
    }

    public function rep_list_detail(){
        return view('work.rep_list_detail');
    }

    public function pm_req_list_emp(){
        return view('work.pm.req_list_emp');
    }

    public function profile(){
        return view('work.profile');
    }
}
