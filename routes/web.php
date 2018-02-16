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
Route::group(['prefix' => config('voyager.prefix', 'admin')], function () {
    Voyager::routes();
});

Route::get('/', function () {
    return view('pages.home');
});

Route::get('add-resume', function () {
   return view('pages.add-resume');
});

Route::post('/registration-vacancy', 'RegistrationVacancyController@registerVacancy');


Route::get('/{page}', 'PageController@page');
