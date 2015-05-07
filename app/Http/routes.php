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

/**
* @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
*/

/** Loading Home Page */
Route::get('/', 'HomeController@index');


/** Model binding */
Route::bind('claim', function($slug)
{
    return \App\Claim::whereSlug($slug)->first();
});
/** Claims management */
Route::get('claims', 'ClaimsController@index');
Route::get('claims/create', 'ClaimsController@create');
Route::get('claims/{claim}', 'ClaimsController@show');
Route::get('claims/{claim}/edit', 'ClaimsController@edit');
Route::post('claims', 'ClaimsController@store');
patch('claims/{claim}', 'ClaimsController@update');


/** Model binding */
Route::bind('client', function($slug)
{
    return \App\Client::whereSlug($slug)->first();
});
/** Clients management */
Route::get('clients', 'ClientsController@index');
Route::get('clients/create', 'ClientsController@create');
Route::get('clients/{client}', 'ClientsController@show');
Route::get('clients/{client}/edit', 'ClientsController@edit');
Route::post('clients', 'ClientsController@store');
patch('clients/{client}', 'ClientsController@update');

/**
 * return individual insurer
 * @param Insurer $insurer
 * @return \Illuminate\View\View
 */


/** Model binding */
Route::bind('insurer', function($slug)
{
    return \App\Insurer::whereSlug($slug)->first();
});
/** Insurers management */
Route::get('insurers', 'InsurersController@index');
Route::get('insurers/create', 'InsurersController@create');
Route::get('insurers/{insurer}', 'InsurersController@show');
Route::get('insurers/{insurer}/edit', 'InsurersController@edit');
Route::post('insurers', 'InsurersController@store');
patch('insurers/{insurer}', 'InsurersController@update');


/** Model binding */
Route::bind('solicitor', function($slug)
{
    return \App\Solicitor::whereSlug($slug)->first();
});
/** Solicitors management */
Route::get('solicitors', 'SolicitorsController@index');
Route::get('solicitors/create', 'SolicitorsController@create');
Route::get('solicitors/{solicitor}', 'SolicitorsController@show');
Route::get('solicitors/{solicitor}/edit', 'SolicitorsController@edit');
Route::post('solicitors', 'SolicitorsController@store');
patch('solicitors/{solicitor}', 'SolicitorsController@update');


/** Model binding */
Route::bind('task', function($slug)
{
   return \App\Task::whereSlug($slug)->first();
});
/** Tasks management */
Route::get('tasks', 'TasksController@index');
Route::get('tasks/create', 'TasksController@create');
Route::get('tasks/{task}', 'TasksController@show');
Route::get('tasks/{task}/edit', 'TasksController@edit');
Route::post('tasks', 'TasksController@store');
patch('tasks/{task}', 'TasksController@update');

/** Users management */
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('users', 'UsersController@index');
Route::get('users/{slug}', 'UsersController@show');
Route::get('users/{slug}/edit', 'UsersController@edit');
Route::post('users', 'UsersController@store');
patch('users/{user}', 'UsersController@update');

/** Model binding */
Route::bind('vehicle', function($slug)
{
    return \App\Vehicle::whereSlug($slug)->first();
});
/** Vehicles management */
Route::get('vehicles', 'VehiclesController@index');
Route::get('vehicles/create', 'VehiclesController@create');
Route::get('vehicles/{vehicle}', 'VehiclesController@show');
Route::get('vehicles/{vehicle}/edit', 'VehiclesController@edit');
Route::post('vehicles', 'VehiclesController@store');
patch('vehicles/{vehicle}', 'VehiclesController@update');