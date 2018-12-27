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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/noPermission', function(){
    return view('permission.noPermission');
});

Route::group(['middleware'=>['authen','rol'],'rol'=>['1']],function(){
    Route::get('/Expedientes/Index',['as'=>'manageAdmin-Expediente-index', 'uses'=>'ExpedienteController@index'] );
    Route::get('/Expedientes/Create',['as'=>'manageAdmin-Expediente-create', 'uses'=>'ExpedienteController@create'] );
    Route::get('/Expedientes/Edit/{id}',['as'=>'manageAdmin-Expediente-edit', 'uses'=>'ExpedienteController@edit'] );
    Route::get('/Expedientes/Update/{id}',['as'=>'manageAdmin-Expediente-update', 'uses'=>'ExpedienteController@update'] );
    Route::post('/Expedientes/Store',['as'=>'manageAdmin-Expediente-store', 'uses'=>'ExpedienteController@store'] );
    Route::get('/Expedientes/Destroy/{id}',['as'=>'manageAdmin-Expediente-destroy', 'uses'=>'ExpedienteController@destroy'] );
    Route::get('/Expedientes/Show/{id}',['as'=>'manageAdmin-Expediente-show', 'uses'=>'ExpedienteController@show'] );
    Route::get('/Expedientes/Download/{id}',['as'=>'manageAdmin-Expediente-download', 'uses'=>'ExpedienteController@download'] );
});
Route::group(['middleware'=>['authen','rol'],'rol'=>['0']],function(){
    Route::get('/Expediente/Index',['as'=>'manageUser-Expediente-index', 'uses'=>'ExpedienteController@index'] );
    Route::get('/Expediente/Download/{id}',['as'=>'manageUser-Expediente-download', 'uses'=>'ExpedienteController@download'] );
    Route::get('/Expediente/Show/{id}',['as'=>'manageUser-Expediente-show', 'uses'=>'ExpedienteController@show'] );
 });


