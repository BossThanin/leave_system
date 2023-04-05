<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        error_log("Run homecontroller.php");
        $user = auth()->user();
        if ($user) {
            switch ($user->role) {
                case 1:
                    return redirect()->route('admin.home');
                    break;
                case 2:
                    return redirect()->route('pm.home');
                    break;
                case 3:
                    return redirect()->route('employee.home');
                    break;
            }
        }
        return view('home');
    }

    public function adminHome()
    {
        return view('admin/adminHome');
    }

    public function pmHome()
    {
        return view('Project_Manager/pmHome');
    }

    public function employeeHome()
    {
        return view('Employee/employeeHome');
    }

    // test view frontend
    public function employeeReqList(){
        return view('Employee/employeeRequest_list');
    }

    public function employeeReqForm(){
        return view('Employee/employeeRequest_form');
    }

    public function employeeRepList(){
        return view('Employee/employeeReplacement_list');
    }

    public function employeeRepDetail(){
        return view('Employee/employeeReplacement_list_detail');
    }

    public function employeeReqDetail(){
        return view('Employee/employeeRequest_list_detail');
    }
}
