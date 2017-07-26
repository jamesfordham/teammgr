<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'PageController@about');

Route::post('grades/store','GradeController@store');
Route::get('grades/create','GradeController@create');

Route::resource('grades.players','GradePlayerController', ['only' => ['store','update','destroy']]);

Route::get('grades/{grade}/edit','GradeController@edit');
Route::put('grades/{grade}','GradeController@update');

Route::delete('grades/{grade}','GradeController@destroy');

Route::get('grades/{grade}','GradeController@show');
Route::get('/grades','GradeController@index');

