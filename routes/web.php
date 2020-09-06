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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//Route::get('/contacto', function () {
//    return phpinfo();
//});


Route::get('/'                   , 'WebController@main');
Route::get('/contacto'           , 'WebController@contact');
Route::post('/guardar-formulario', 'WebController@saveContact');







