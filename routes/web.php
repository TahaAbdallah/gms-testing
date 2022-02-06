<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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




// ROUTES FOR WEB

Auth::routes();

Route::get('/testloc', 'SiteController@testloc')->name('testloc');


// SITE HOMEPAGE
Route::get('/', 'SiteController@index')->name('index');

// CONTACT US PAGE
Route::get('contact-us', 'SiteController@contact')->name('contact');

// SERVICES PAGES
Route::get('our-services', 'SiteController@services')->name('services');
Route::get('development', 'SiteController@development')->name('developmentPage');
Route::get('design', 'SiteController@design')->name('designPage');
Route::get('marketing', 'SiteController@marketing')->name('marketingPage');
Route::get('media', 'SiteController@media')->name('mediaPage');

Route::get('show-service/{id}', 'SiteController@showService')->name('service.show');

// PROJECTS PAGEs
Route::get('our-projects', 'SiteController@project')->name('projectPage');
Route::get('media-projects', 'SiteController@mediaProjects')->name('mediaProjects');
Route::get('design-projects', 'SiteController@designProjects')->name('designProjects');
Route::get('marketing-projects', 'SiteController@marketingProjects')->name('marketingProjects');
Route::get('development-projects', 'SiteController@developmentProjects')->name('developmentProjects');

Route::get('show-project/{id}', 'SiteController@showProject')->name('project.show');



// ##################################################################

// Route::get('sendbasicemail', 'MailController@basic_email');
// Route::get('sendhtmlemail', 'MailController@html_email');
// Route::get('sendattachmentemail', 'MailController@attachment_email');
