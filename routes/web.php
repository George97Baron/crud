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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/empleados', function () {
   // return view('empleados.index');
//});
//Route::get('/empleados', 'App\Http\Controllers\EmpleadosController@index');


//Route::get('/empleados/create', function () {
  //  return view('empleados.create');
//});
//Route::get('/empleados/create','App\Http\Controllers\EmpleadosControllerphp@create');


Route::resource('empleados', 'App\Http\Controllers\EmpleadosController');
