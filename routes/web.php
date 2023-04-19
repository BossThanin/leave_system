<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use APP\Http\Controllers\LeaveFormController;

use function PHPUnit\Framework\returnSelf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/connection', function () {
    return view('connection');
});
Route::get('/test-connection', function () {
    try {
        DB::connection()->getPdo();
        echo "Connection to database established successfully.";
    } catch (\Exception $e) {
        die("Could not connect to the database: " . $e->getMessage());
    }
});
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('admin/home',[HomeController::class,'adminHome'])->name('admin.home')->middleware('is_admin');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('role:1');

    Route::get('/pm/home', [HomeController::class, 'pmHome'])->name('pm.home')->middleware('role:2');

    Route::get('/employee/home', [HomeController::class, 'employeeHome'])->name('employee.home')->middleware('role:3');

    //test frontend go page
    Route::get('/employee/req_list', [HomeController::class, 'employeeReqList'])->name('employee.req_list')->middleware('role:3');
    Route::get('/employee/req_list_form', [HomeController::class, 'employeeReqForm'])->name('employee.req_list_form')->middleware('role:3');
    Route::get('/employee/rep_list', [HomeController::class, 'employeeRepList'])->name('employee.rep_list')->middleware('role:3');
    Route::get('/employee/rep_list_detail' ,[HomeController::class, 'employeeRepDetail'])->name('employee.rep_detail')->middleware('role:3');
    Route::get('/employee/req_list_derail' ,[HomeController::class, 'employeeReqDetail'])->name('employee.req_derail')->middleware('role:3');



});
Route::get('/leave-form', 'App\Http\Controllers\LeaveFormController@create')->name('leave-form.create');
Route::post('/leave-form', 'App\Http\Controllers\LeaveFormController@store')->name('leave-form.store');

// work
Route::get('/index',[\App\Http\Controllers\FrontendController::class,'index'])->name('index');
Route::get('/form',[\App\Http\Controllers\FrontendController::class,'form'])->name('form');
Route::get('/req_list',[\App\Http\Controllers\FrontendController::class,'req_list'])->name('req_list');
Route::get('/req_list_detail',[\App\Http\Controllers\FrontendController::class,'req_list_detail'])->name('req_list_detail');
Route::get('/rep_list',[\App\Http\Controllers\FrontendController::class,'rep_list'])->name('rep_list');
Route::get('/rep_list_detail',[\App\Http\Controllers\FrontendController::class,'rep_list_detail'])->name('rep_list_detail');
Route::get('/pm/req_list_emp',[\App\Http\Controllers\FrontendController::class,'pm_req_list_emp'])->name('pm_req_list_emp');
Route::get('/profile',[\App\Http\Controllers\FrontendController::class,'profile'])->name('profile');
// end work


