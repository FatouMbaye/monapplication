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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('client');
});
Route::get('/clients', function () {
    return view('clients.index');
});  
Route::get('commande', function () {
    return view('commande');
});
Route::get('produit', function () {
    return view('produit');
}); 

/*
Route::get('client', function () {
    return view('client');
});  

Route::get('commande', function () {
    return view('commande');
});
Route::get('produit', function () {
    return view('produit');
}); 

/*Route::views('client','client');
Route::views('produit','produit');
Route::views('commande','commande');


Route::get('clients','ClientsController@liste');
Route::post('clients','ClientsController@store');*/


/*
Route::get('clients', 'ClientsController@liste');
Route::get('clients', 'ClientsController@store');*/



