<?php

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

Route::get('/', 			'ExternalPageController@index');
Route::get('search-rides', 	'ExternalPageController@search');


/*
|--------------------------------------------------------------------------
| ADMIN PAGES CONTROLLER ENTRY
|--------------------------------------------------------------------------
*/
// Route::get('admin/dashboard', 			'AdminPageController@dashboard');
// Route::get('admin/one-post', 			'AdminPageController@adminViewPost');
// Route::get('admin/one-user', 			'AdminPageController@adminViewProfile');
// Route::get('admin/shippers', 			'AdminPageController@shippers');
// Route::get('admin/carriers', 			'AdminPageController@carriers');
// Route::get('admin/account/pending', 	'AdminPageController@accountPending');
// Route::get('admin/transactions', 		'AdminPageController@transactionActivities');
// Route::get('admin/activity-logs', 		'AdminPageController@activityLogs');
// Route::get('admin/ads-promotions', 		'AdminPageController@ads');
// Route::get('admin/notifications', 		'AdminPageController@notifications');
// Route::get('admin/message-center', 		'AdminPageController@messages');
// Route::get('admin/profile', 			'AdminPageController@profile');
// Route::get('admin/settings', 			'AdminPageController@settings');
// Route::get('admin/payments',			'AdminPageController@payments');

Auth::routes();
Route::get('/home', 		'HomeController@index')->name('index');



