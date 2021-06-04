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
| ADMIN AUTH ENTRY POINT
|--------------------------------------------------------------------------
*/
Route::get('/admin/login', 			'AuthAdminController@index');
Route::post('/admin/login', 		'AuthAdminController@loginAdmin')->name('admin_login');
Route::get('/admin/logout',			'AuthAdminController@logoutAdmin')->name('logout_admin');


/*
|--------------------------------------------------------------------------
| ORDER ENTRY POINT
|--------------------------------------------------------------------------
*/
Route::post('book/order', 		'CustomerOrderController@addOne');
Route::get('book/order', 		'CustomerOrderController@fetchAll');
Route::put('book/order', 		'CustomerOrderController@updateOne');
Route::delete('book/order', 	'CustomerOrderController@addOne');
Route::get('book/order-one', 	'CustomerOrderController@fetchOne');


/*
|--------------------------------------------------------------------------
| ADMIN PAGES CONTROLLER ENTRY
|--------------------------------------------------------------------------
*/
Route::get('admin/dashboard', 			'AdminPageController@dashboard');
Route::get('admin/cars', 				'AdminPageController@cars');
Route::get('admin/orders', 				'AdminPageController@orders');
Route::get('admin/shippers', 			'AdminPageController@shippers');
Route::get('admin/carriers', 			'AdminPageController@carriers');
Route::get('admin/account/pending', 	'AdminPageController@accountPending');
Route::get('admin/transactions', 		'AdminPageController@transactionActivities');
Route::get('admin/activity-logs', 		'AdminPageController@activityLogs');
Route::get('admin/ads-promotions', 		'AdminPageController@ads');
Route::get('admin/notifications', 		'AdminPageController@notifications');
Route::get('admin/message-center', 		'AdminPageController@messages');
Route::get('admin/profile', 			'AdminPageController@profile');
Route::get('admin/settings', 			'AdminPageController@settings');
Route::get('admin/payments',			'AdminPageController@payments');


/*
|--------------------------------------------------------------------------
| ADMIN CARS CONTROLLER ENTRY
|--------------------------------------------------------------------------
*/
Route::post('admin/cars/add', 			'VehicleController@addOne');
Route::delete('admin/cars/delete', 		'VehicleController@deleteOne');

Auth::routes();
Route::get('/home', 		'HomeController@index')->name('index');



