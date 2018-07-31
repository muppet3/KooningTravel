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
	Route::get('search/{destino}', 'Home\HomeController@search');
	Route::get('details/{id}/{hotel}', 'Home\HomeController@details');
	Route::get('list/destino',"Home\HomeController@list");
	Route::get('search/list/destino',"Home\HomeController@list");
	Route::get('checkout/{idroom}/{id}',"Home\HomeController@booking");
	Route::post('checkout/{idroom}/{id}',"Home\HomeController@alertemail");
	Route::get('gracias',"Purchase\PurchaseController@gracias");


	/*
		╔══════════════╗
		║  Activities  ║
		╚══════════════╝
	*/

	Route::get('parques', 'Activities\ActivitiesController@parques');
	Route::get('parques/{parque}', 'Activities\ActivitiesController@details');
	Route::get('tours', 'Activities\ActivitiesController@tours');
	Route::get('tours/{tour}', 'Activities\ActivitiesController@details');

	/*
		╔═══════════════╗
		║  Complemenst  ║
		╚═══════════════╝
	*/
		
	Route::get('traslados', 'Complements\ComplementsController@traslados');

	/*
		╔══════════════╗
		║  Promotions  ║
		╚══════════════╝
	*/
	Route::get('promociones', 'Promotions\PromotionsController@promociones');
	Route::get('oferta/{oferta}', 'Promotions\PromotionsController@ofertas');
	Auth::routes();


	/*
		╔══════════════╗
		║     Pago     ║
		╚══════════════╝
	*/
	Route::get('purchase', 'Purchase\Purchase\PurchaseController@Pago');