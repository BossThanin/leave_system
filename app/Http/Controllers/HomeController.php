<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    
    //     /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function adminHome()
    // {
    //     return view('adminHome');
    // }
    // public function index()
    // {
    //     if (auth()->check()) {
    //         switch (auth()->user()->role) {
    //             case 'admin':
    //                 return redirect()->route('admin.home');
    //             case 'pm':
    //                 return redirect()->route('pm.home');
    //             case 'employee':
    //                 return redirect()->route('employee.home');
    //             default:
    //                 return redirect()->route('home');
    //         }
    //     }
    //     return view('home');
    // }
    
    // public function adminHome()
    // {
    //     return view('adminHome');
    // }
    
    // public function pmHome()
    // {
    //     return view('pmHome');
    // }
    
    // public function employeeHome()
    // {
    //     return view('employeeHome');
    // }
    public function index()
{
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
    return view('adminHome');
}

public function pmHome()
{
    return view('pmHome');
}

public function employeeHome()
{
    return view('employeeHome');
}

}
