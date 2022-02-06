<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\AuthController;





/*
|--------------------------------------------------------------------------
| employees Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'manager',], function () {

    Route::group(['namespace' => 'employees',], function () {

        // Route::get('/imgtest', 'EmployeesController@imgtest')->name('imgtest');
        // Route::post('/testcheck', 'EmployeesController@testcheck')->name('testcheck');


        Route::get('login', 'EmployeesController@loginPage')->name('employeesLogin');
        Route::post('/empSignInProccess', 'EmployeesController@empSignInProccess')->name('empSignInProccess');
        Route::get('/check-in-and-check-out', 'EmployeesController@checkInOut')->name('checkInOut');

        Route::post('/create-checkin', 'EmployeesController@createCheckIn')->name('createCheckIn');
        Route::get('/Thanks-For-Check-In', 'EmployeesController@thanksForCheckIn')->name('thanksForCheckIn');

        Route::post('/create-checkout', 'EmployeesController@createCheckOut')->name('createCheckOut');
        Route::get('/Thanks-For-Check-Out', 'EmployeesController@thanksForCheckOut')->name('thanksForCheckOut');
    });
});
