<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckManager;




/*
|--------------------------------------------------------------------------
| managers Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/



Route::group(['namespace' => 'manager',], function () {

    // ##### MANAGER LOGIN #####
    Route::get('/login', 'ManagerController@managerLogin')->name('managerLogin');
    Route::post('/process-signin', 'ManagerController@processSignin')->name('processSignin');

    Route::middleware([CheckManager::class])->group(function () {

        // ##### ADD MANAGER To be added to admin panel #####
        // Route::get('/register', 'ManagerController@signup')->name('managerRegister');
        // Route::post('/create-manager', 'ManagerController@customSignup')->name('managerRegistration');

        // ##### ADD EMPLOYEE #####
        Route::get('/add-employee', 'ManagerController@addEmployee')->name('addEmployee');
        Route::post('/add-employee', 'ManagerController@processAddEmployee')->name('processAddEmployee');
        Route::get('/all-employees', 'ManagerController@allEmployees')->name('allEmployees');
        Route::get('/employee-profile-page/{id}', 'ManagerController@empProfile')->name('empProfile');

        // ##### MANAGER DASHBOARD #####
        Route::get('/dashboard', 'ManagerController@managerDashboard')->name('managerDashboard');
        Route::get('/', 'ManagerController@managerDashboard')->name('managerDashboard');
        Route::get('/logout', 'ManagerController@logout')->name('managerLogout');


        // ##### january Check #####
        Route::get('january-check', 'ManagerController@januaryCheck')->name('januaryCheck');
        Route::get('january-show/{id}', 'ManagerController@januaryShow')->name('januaryShow');

        // ##### february Check #####
        Route::get('february-check', 'ManagerController@februaryCheck')->name('februaryCheck');
        Route::get('february-show/{id}', 'ManagerController@februaryShow')->name('februaryShow');

        // ##### march Check #####
        Route::get('march-check', 'ManagerController@marchCheck')->name('marchCheck');
        Route::get('march-show/{id}', 'ManagerController@marchShow')->name('marchShow');

        // ##### april Check #####
        Route::get('april-check', 'ManagerController@aprilCheck')->name('aprilCheck');
        Route::get('april-show/{id}', 'ManagerController@aprilShow')->name('aprilShow');

        // ##### may Check #####
        Route::get('may-check', 'ManagerController@mayCheck')->name('mayCheck');
        Route::get('may-show/{id}', 'ManagerController@mayShow')->name('mayShow');

        // ##### june Check #####
        Route::get('june-check', 'ManagerController@juneCheck')->name('juneCheck');
        Route::get('june-show/{id}', 'ManagerController@juneShow')->name('juneShow');

        // ##### july Check #####
        Route::get('july-check', 'ManagerController@julyCheck')->name('julyCheck');
        Route::get('july-show/{id}', 'ManagerController@julyShow')->name('julyShow');

        // ##### august Check #####
        Route::get('august-check', 'ManagerController@augustCheck')->name('augustCheck');
        Route::get('august-show/{id}', 'ManagerController@augustShow')->name('augustShow');

        // ##### september Check #####
        Route::get('september-check', 'ManagerController@septemberCheck')->name('septemberCheck');
        Route::get('september-show/{id}', 'ManagerController@septemberShow')->name('septemberShow');

        // ##### october Check #####
        Route::get('october-check', 'ManagerController@octoberCheck')->name('octoberCheck');
        Route::get('october-show/{id}', 'ManagerController@octoberShow')->name('octoberShow');

        // ##### november Check #####
        Route::get('november-check', 'ManagerController@novemberCheck')->name('novemberCheck');
        Route::get('november-show/{id}', 'ManagerController@novemberShow')->name('novemberShow');

        // ##### december Check #####
        Route::get('december-check', 'ManagerController@decemberCheck')->name('decemberCheck');
        Route::get('december-show/{id}', 'ManagerController@decemberShow')->name('decemberShow');
    });
});
