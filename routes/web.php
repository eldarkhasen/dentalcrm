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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('employees', 'EmployeeController');
Route::resource('permissions', 'PermissionController');
Route::resource('positions', 'PositionController');

Route::get('getroles',"RoleController@getRoles");
Route::get('getpermissions',"PermissionController@getPermissions");
Route::get('getpositions',"PositionController@getPositions");

Route::get('getpositionsByEmpId/{id}',"EmployeeController@getPositionsById");

Route::get('getUserById/{id}',"UserController@getUserById");
Route::get('getPermissionsByUserId/{id}',"PermissionController@getPermissionsByUserId");


