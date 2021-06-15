<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(
    ['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth',],
    function(){
        Route::get('dashboard', 'DashboardController')->name('dashboard');
        Route::resource('employees', 'EmployeeController');
        Route::resource('opd', 'OpdController');
        Route::resource('positions', 'PositionController');
        Route::resource('attendances', 'AttendanceController');
        Route::resource('absences', 'AbsenceController');
        Route::resource('reports', 'ReportAttendanceController');
        Route::resource('roles', 'RoleController');
        Route::resource('permissions', 'PermissionController');
        Route::resource('users', 'UserController');
        Route::resource('devices', 'DeviceController');
    }
);