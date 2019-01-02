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
    Route::get('/Expedientes/Create',['as'=>'manageAdmin-Expediente-create', 'uses'=>'ExpedienteDocumentController@create'] );
    Route::post('/Expedientes/Store',['as'=>'manageAdmin-Expediente-store', 'uses'=>'ExpedienteDocumentController@store'] );
    Route::get('/Expedientes/Edit/{id}',['as'=>'manageAdmin-Expediente-edit', 'uses'=>'ExpedienteController@edit'] );
    Route::get('/Expedientes/Update/{id}',['as'=>'manageAdmin-Expediente-update', 'uses'=>'ExpedienteController@update'] );
    Route::get('/Expedientes/Show/{id}',['as'=>'manageAdmin-Expediente-show', 'uses'=>'ExpedienteController@show'] );
    Route::get('/Expedientes/Download/{id}',['as'=>'manageAdmin-Expediente-download', 'uses'=>'ExpedienteController@download'] );
    
    Route::get('/Expedientes/Destroy/{id}',['as'=>'manageAdmin-Expediente-destroy', 'uses'=>'ExpedienteDocumentController@destroy'] );
    Route::get('/Expedientes/Documnet/{id}',['as'=>'manageAdmin-Document-index', 'uses'=>'ExpedienteDocumentController@index'] );
    Route::post('/Expedientes/moreDocumnet',['as'=>'manageAdmin-More_Document-store', 'uses'=>'ExpedienteDocumentController@more'] );
    
    Route::get('/Reasons/Index',['as'=>'manageAdmin-reason-index', 'uses'=>'ReasonController@index'] );
    Route::get('/Reasons/Update/{id}',['as'=>'manageAdmin-reason-update', 'uses'=>'ReasonController@update'] );
    Route::get('/Reasons/Store',['as'=>'manageAdmin-reason-store', 'uses'=>'ReasonController@store'] );
    Route::get('/Reasons/Delete/{id}',['as'=>'manageAdmin-reason-destroy', 'uses'=>'ReasonController@destroy'] );

    Route::get('/Types/Index',['as'=>'manageAdmin-type-index', 'uses'=>'TypeController@index'] );
    Route::get('/Types/Update/{id}',['as'=>'manageAdmin-type-update', 'uses'=>'TypeController@update'] );
    Route::get('/Types/Store',['as'=>'manageAdmin-type-store', 'uses'=>'TypeController@store'] );
    Route::get('/Types/Delete/{id}',['as'=>'manageAdmin-type-delete', 'uses'=>'TypeController@destroy'] );
});
Route::group(['middleware'=>['authen','rol'],'rol'=>['0']],function(){
    Route::get('/Expediente/Index',['as'=>'manageUser-Expediente-index', 'uses'=>'ExpedienteController@index'] );
    Route::get('/Expediente/Download/{id}',['as'=>'manageUser-Expediente-download', 'uses'=>'ExpedienteController@download'] );
    Route::get('/Expediente/Show/{id}',['as'=>'manageUser-Expediente-show', 'uses'=>'ExpedienteController@show'] );
 });


