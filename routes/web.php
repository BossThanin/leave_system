<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use APP\Http\Controllers\LeaveFormController;

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
});
Route::get('/leave-form', 'App\Http\Controllers\LeaveFormController@create')->name('leave-form.create');
Route::post('/leave-form', 'App\Http\Controllers\LeaveFormController@store')->name('leave-form.store');

