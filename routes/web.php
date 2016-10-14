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

Route::resource('stations', 'StationsController');
Route::resource('vehicles', 'VehiclesController');
Route::post('vehicles_mass_destroy', ['uses' => 'VehiclesController@massDestroy', 'as' => 'vehicles.mass_destroy']);
Route::resource('assets', 'AssetsController');
Route::resource('asset_types', 'AssetTypesController');
Route::resource('mobile_computers', 'MobileComputersController');
Route::resource('items', 'ItemsController');
Route::resource('types', 'TypesController');
Route::resource('mobile_equipments', 'MobileEquipmentsController');
Route::resource('hardwares', 'HardwaresController');
Route::resource('miscs', 'MiscsController');
Route::resource('common_fields', 'CommonFieldsController');
Route::resource('personnels', 'PersonnelsController');
Route::resource('logs', 'LogsController');
Route::resource('grants', 'GrantsController');
Route::resource('people', 'PeopleController');
Route::resource('all_assets', 'AllAssetsController');
    Route::resource('statuses', 'StatusesController');
    Route::post('statuses_mass_destroy', ['uses' => 'StatusesController@massDestroy', 'as' => 'statuses.mass_destroy']);
    Route::resource('manufacturers', 'ManufacturersController');
    Route::resource('models', 'ModelsController');
    Route::resource('unit_types', 'UnitTypesController');
    Route::resource('related_files', 'RelatedFilesController');
    Route::post('related_files_mass_destroy', ['uses' => 'RelatedFilesController@massDestroy', 'as' => 'related_files.mass_destroy']);
});