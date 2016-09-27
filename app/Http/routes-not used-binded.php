<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

# Station
Route::group([ 'prefix' => 'Station' ], function () {

    Route::get('/', [ 'as' => 'Station', 'uses' => 'StationsController@index' ]);
    Route::get('create', [ 'as' => 'stations.create', 'uses' => 'StationsController@create' ]);

    Route::get(
        '{stationId}/edit',
        [ 'as' => 'stations.update', 'uses' => 'StationsController@edit' ]
    );
    Route::get('view',['as'=> 'stations.show', 'uses' => 'StationsController@show']);
    Route::get('edit',['as'=> 'stations.edit', 'uses' => 'StationsController@edit']);
    Route::get('delete',['as'=> 'stations.destroy', 'uses' => 'StationsController@destroy']);
    Route::get('{stationId}/view', 'StationsController@show');
    Route::get(
        '{stationId}/delete',
        [ 'as' => 'stations.delete', 'uses' => 'StationsController@destroy' ]
    );
});
//Route::resource('Station', 'StationsController');
//Route::resource('stations.create', 'StationsController');