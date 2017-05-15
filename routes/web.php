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
    return view('emps.index');
});

Route::get('/api/v1/employees/{id?}', 'Employees@index');
Route::post('/api/v1/employees', 'Employees@store');
Route::post('/api/v1/employees/{id}', 'Employees@update');
Route::delete('/api/v1/employees/{id}', 'Employees@destroy');


/**
 *
 * All not registered routes are handled in app/Exceptions/Handler.php
 *
public function render($request, Exception $exception)
{

if($exception instanceof NotFoundHttpException){
return response()->view('emps.index');
}

return parent::render($request, $exception);
}
 * so they will be redirected to emps.index page
 *
 */
