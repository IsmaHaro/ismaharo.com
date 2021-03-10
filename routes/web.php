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


/*
 * RUTAS GENERALES
 */
Route::get('/'                      , 'WebController@main');
Route::get('/contacto'              , 'WebController@contact');
Route::get('/mapa-del-sitio'        , 'WebController@sitemap');
Route::post('/guardar-formulario'   , 'WebController@saveContact');

/*
 * RUTAS DE SERVICIOS
 */
Route::get('/servicio-de-seo'       , 'WebController@SeoService');
Route::get('/servicio-de-google-ads', 'WebController@GoogleAdsService');

/*
 * RUTAS DE POSICIONAMIENTO SEO BLOG
 */
Route::get('/posicionamiento-seo'   , 'WebController@blogCategorySeo');
Route::get('/posicionamiento-seo/como-hacer-que-mi-pagina-web-aparezca-en-google', 'WebController@blogPost1');


/*
 * RUTAS DE GOOGLE ADS BLOG
 */
Route::get('/google-ads', 'WebController@blogCategoryGoogleAds');
Route::get('/google-ads/como-anunciarme-en-google-ads', 'WebController@blogPostGoogleAds1');

/*
 * BNI
 */
Route::get('/bni/horli', 'WebController@bniHorli');