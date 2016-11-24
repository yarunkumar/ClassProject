<?php
Route::get('/', function () {
    return redirect('/home');
});

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
$this->post('register', 'Auth\RegisterController@register')->name('auth.register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('auth.password.email');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');

    Route::resource('all_assets', 'AllAssetsController');
    Route::resource('grants', 'GrantsController');
    Route::resource('personnels', 'PersonnelsController');
//    Route::resource('logs', 'LogsController');
    Route::resource('stations', 'StationsController');
    Route::resource('statuses', 'StatusesController');
    Route::post('statuses_mass_destroy', ['uses' => 'StatusesController@massDestroy', 'as' => 'statuses.mass_destroy']);
    Route::resource('types', 'TypesController');
    Route::resource('unit_types', 'UnitTypesController');
    Route::resource('vehicles', 'VehiclesController');
    Route::post('vehicles_mass_destroy', ['uses' => 'VehiclesController@massDestroy', 'as' => 'vehicles.mass_destroy']);
	Route::resource('vendors', 'VendorsController');
    Route::post('vendors_mass_destroy', ['uses' => 'VendorsController@massDestroy', 'as' => 'vendors.mass_destroy']);

    Route::resource('related_files', 'RelatedFilesController');
    Route::post('related_files_mass_destroy', ['uses' => 'RelatedFilesController@massDestroy', 'as' => 'related_files.mass_destroy']);

    /**
     * Part 1 - Upload images in Dropzone
     */
//    Route::resource('upload', 'ImageController');
//      Route::get('upload', ['as' => 'upload', 'uses' => 'ImageController@getUpload']);
//    Route::post('upload', ['as' => 'upload-post', 'uses' =>'ImageController@postUpload']);
//    Route::post('upload/delete', ['as' => 'upload-remove', 'uses' =>'ImageController@deleteUpload']);
    /**
     * Part 2 - Display already uploaded images in Dropzone
     */
//    Route::get('example-2', ['as' => 'upload-2', 'uses' => 'ImageController@getServerImagesPage']);
//    Route::get('server-images', ['as' => 'server-images', 'uses' => 'ImageController@getServerImages']);

    Route::get('/getImport', 'ExcelController@getImport');
    Route::get('/postImport', 'ExcelController@postImport');
    Route::get('/getExport', 'ExcelController@getExport');

    Route::get('dropzone', 'ImageController@dropzone');
    Route::post('dropzone/store', ['as'=>'dropzone.store','uses'=>'ImageController@dropzoneStore']);

//blueimp
//    Route::resource('/upload', 'UploadController');


});