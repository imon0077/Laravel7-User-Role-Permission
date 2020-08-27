<?php

use Illuminate\Support\Facades\Route;
use App\User;

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
    // $user = User::all();
    // dd($user);
    // dd($user->hasRole('developer')); //will return true, if user has role
    // dd($user->givePermissionsTo('create-tasks'));// will return permission, if not null
    // dd($user->can('create-tasks')); // will return true, if user has permission
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/seed', 'PermissionController@Seed');
