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

	/*
		╔══════════════╗
		║     Home     ║
		╚══════════════╝
	*/

	Route::get('/', 'Home\HomeController@home');
	Route::get('/home', 'Home\HomeController@home');
	Route::get('explora', 'Home\HomeController@explor');
	Route::get('search/{destino}', 'Home\HomeController@search');
	Route::get('details/{id}/{hotel}', 'Home\HomeController@details');
	Route::get('list/destino',"Home\HomeController@list");
	Route::get('checkout/{idroom}/{id}',"Home\HomeController@booking");
	Route::post('checkout/{idroom}/{id}',"Home\HomeController@alertemail");



	/*
		╔══════════════╗
		║  Activities  ║
		╚══════════════╝
	*/

	Route::get('parques', 'Activities\ActivitiesController@parques');
	Route::get('parques/{parque}', 'Activities\ActivitiesController@details');
	Route::post('parques/{parque}', 'Activities\ActivitiesController@booking');
	Route::get('tours', 'Activities\ActivitiesController@tours');
	Route::get('tours/{tour}', 'Activities\ActivitiesController@details');
	Route::post('tours/{tour}', 'Activities\ActivitiesController@booking');

	/*
		╔═══════════════╗
		║  Complemenst  ║
		╚═══════════════╝
	*/
		
	Route::get('traslados', 'Complements\ComplementsController@traslados');
	Route::post('traslados', 'Complements\ComplementsController@booking');
	Route::get('traslado/price','Complements\ComplementsController@price');
	Route::get('blog', 'Complements\ComplementsController@blog');
	Route::get('blog/{blog}', 'Complements\ComplementsController@details');
	Route::get('autos', 'Complements\ComplementsController@autos');

	Route::get('contacto','Complements\ComplementsController@contacto');
	Route::get('nosotros','Complements\ComplementsController@nosotros');
	Route::get('seguridad','Complements\ComplementsController@seguridad');
	Route::get('terminos','Complements\ComplementsController@terminos');
	Route::get('privacidad','Complements\ComplementsController@privacidad');


	/*
		╔══════════════╗
		║  Promotions  ║
		╚══════════════╝
	*/
	Route::get('promociones', 'Promotions\PromotionsController@promociones');
	Route::get('oferta/{oferta}', 'Promotions\PromotionsController@ofertas');
	/*
		╔══════════════╗
		║     Pago     ║
		╚══════════════╝
	*/
	Route::get('checkout', 'Purchase\PurchaseController@checkout');
	Route::get('purchase', 'Purchase\PurchaseController@Pago');
	Route::get('gracias',"Purchase\PurchaseController@gracias");
	Route::get('eliminar/{id}',"Purchase\PurchaseController@delete");

	/*
		╔═══════════════╗
		║     login     ║
		╚═══════════════╝
	*/
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('login', 'Auth\LoginController@login');
	Route::post('logout', 'Auth\LoginController@logout')->name('logout');