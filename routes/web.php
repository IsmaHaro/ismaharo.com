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
Route::get('/mapa-del-sitio'     , 'WebController@sitemap');
Route::post('/guardar-formulario', 'WebController@saveContact');
Route::get('/servicio-de-seo'    , 'WebController@SeoService');
Route::get('/posicionamiento-seo', 'WebController@blogCategorySeo');
Route::get('/posicionamiento-seo/como-hacer-que-mi-pagina-web-aparezca-en-google', 'WebController@blogPost1');
