<?php

    Route::group(['prefix' => '/api/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

        Route::resource('stations', 'StationsController');

        Route::resource('assets', 'AssetsController');

        Route::resource('asset_types', 'AssetTypesController');

});
