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
Route::auth();

Route::group(['prefix' => config('voyager.prefix', 'admin')], function () {
    Voyager::routes();
});

Route::get('/', 'HomeController@index');

Route::get('add-resume', function () {
   return view('pages.add-resume');
})->name('add-resume');

Route::post('/registration-resume', 'RegistrationVacancyController@registerVacancy');
Route::post('/question-vacancy', 'RegistrationVacancyController@questionVacancy');

Route::group(['middleware' => 'auth'], function () {
    Route::get('add-vacancy', function () {
        return view('pages.add-vacancy');
    })->name('add-vacancy');
});

Route::get('/work', 'PageController@workList')->name('works');
Route::get('/work/page/{page}', 'PageController@workList')
    ->where('page', '[0-9]+');
Route::get('/work/{slug}', 'PageController@work')->name('work');


Route::get('/news', 'NewsController@newsList');
Route::get('/news/page/{page}', 'NewsController@newsList')
    ->where('page', '[0-9]+');
Route::get('/news/{slug}', 'NewsController@news');

Route::get('/{page}', 'PageController@page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
