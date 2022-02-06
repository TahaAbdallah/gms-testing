<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminMiddleware;




/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['namespace' => 'admin',], function () {

    // ADMIN DASHBOARD
    Route::get('/', 'AdminController@index')->name('dashboard');

    //ADMINS ROUTES
    Route::get('show-admins', 'AdminController@showAdmins')->name('admins');
    Route::get('add-admins', 'AdminController@adminsCreate')->name('admins.create');
    Route::post('admins/store', 'AdminController@adminsStore')->name('admins.store');
    Route::get('admin/delete/{id}', 'AdminController@adminDestroy')->name('admins.destroy');

    //MANAGERS ROUTES
    Route::get('show-managers', 'AdminController@showManagers')->name('managers');
    Route::get('add-managers', 'AdminController@managersCreate')->name('managers.create');
    Route::post('manager/store', 'AdminController@managersStore')->name('managers.store');
    Route::get('manager/delete/{id}', 'AdminController@managerDestroy')->name('managers.destroy');

    //EMPLOYEES ROUTES
    Route::get('show-employees', 'AdminController@showEmployees')->name('employees');
    Route::get('add-employee', 'AdminController@employeesCreate')->name('employees.create');
    Route::post('employee/store', 'AdminController@employeeStore')->name('employees.store');
    Route::get('employee/delete/{id}', 'AdminController@employeeDestroy')->name('employees.destroy');

    //CLIENTS ROUTES
    Route::get('show-Clients', 'AdminController@showClients')->name('clients');
    Route::get('add-client', 'AdminController@clientsCreate')->name('clients.create');
    Route::post('client/store', 'AdminController@clientStore')->name('clients.store');
    Route::get('client/delete/{id}', 'AdminController@clientDestroy')->name('clients.destroy');

    //Media Services ROUTES
    Route::get('media-services', 'AdminController@mediaServices')->name('mediaServices');
    Route::get('media-services/add-service', 'AdminController@mediaServiceCreate')->name('mediaService.create');
    Route::post('media-services/store', 'AdminController@mediaServiceStore')->name('mediaService.store');
    Route::get('media-services/edit/{id}', 'AdminController@mediaServicesEdit')->name('mediaServices.edit');
    Route::post('media-services/update/{id}', 'AdminController@mediaServicesUpdate')->name('mediaServices.update');
    Route::get('media-services/delete/{id}', 'AdminController@mediaServiceDestroy')->name('mediaService.destroy');

    //DEVELOPMENT Services ROUTES
    Route::get('development-services', 'AdminController@developmentServices')->name('developmentServices');
    Route::get('development-services/add-service', 'AdminController@developmentServiceCreate')->name('developmentService.create');
    Route::post('development-services/store', 'AdminController@developmentServiceStore')->name('developmentService.store');
    Route::get('development-services/edit/{id}', 'AdminController@developmentServicesEdit')->name('developmentServices.edit');
    Route::post('development-services/update/{id}', 'AdminController@developmentServicesUpdate')->name('developmentServices.update');
    Route::get('development-services/delete/{id}', 'AdminController@developmentServiceDestroy')->name('developmentService.destroy');

    //Design Services ROUTES
    Route::get('design-services', 'AdminController@designServices')->name('designServices');
    Route::get('design-services/add-service', 'AdminController@designServiceCreate')->name('designService.create');
    Route::post('design-services/store', 'AdminController@designServiceStore')->name('designService.store');
    Route::get('design-services/edit/{id}', 'AdminController@designServicesEdit')->name('designServices.edit');
    Route::post('design-services/update/{id}', 'AdminController@designServicesUpdate')->name('designServices.update');
    Route::get('design-services/delete/{id}', 'AdminController@designServiceDestroy')->name('designService.destroy');

    //Marketing Services ROUTES
    Route::get('marketing-services', 'AdminController@marketingServices')->name('marketingServices');
    Route::get('marketing-services/add-service', 'AdminController@marketingServiceCreate')->name('marketingService.create');
    Route::post('marketing-services/store', 'AdminController@marketingServiceStore')->name('marketingService.store');
    Route::get('marketing-services/edit/{id}', 'AdminController@marketingServicesEdit')->name('marketingServices.edit');
    Route::post('marketing-services/update/{id}', 'AdminController@marketingServicesUpdate')->name('marketingServices.update');
    Route::get('marketing-services/delete/{id}', 'AdminController@marketingServiceDestroy')->name('marketingService.destroy');

    //PROJECTS Services ROUTES
    Route::get('projects', 'AdminController@projects')->name('projects');
    Route::get('projects/add-project', 'AdminController@projectsCreate')->name('projects.create');
    Route::post('projects/store', 'AdminController@projectsStore')->name('projects.store');
    Route::get('projects/delete/{id}', 'AdminController@projectsDestroy')->name('projects.destroy');

    //PROMOS ROUTES
    Route::get('promos', 'AdminController@promos')->name('promos');
    Route::get('promos/add-promo', 'AdminController@promosCreate')->name('promos.create');
    Route::post('promos/store', 'AdminController@promosStore')->name('promos.store');
    Route::get('/promos/edit/{id}', 'AdminController@promosEdit')->name('promos.edit');
    Route::post('/promos/update/{id}', 'AdminController@promosUpdate')->name('promos.update');
});
