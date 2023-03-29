<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/test-connection', function () {
    try {
        DB::connection()->getPdo();
        echo "Connection to database established successfully.";
    } catch (\Exception $e) {
        die("Could not connect to the database: " . $e->getMessage());
    }
});
Route::get('/leave_system', function () {
    return view('leave_system');
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

