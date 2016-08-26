<?php

Route::get('/', [
    'as' => 'tickets.latest',
    'uses' => 'TicketsController@latest',
]);
Route::get('/popular', [
    'as' => 'tickets.popular',
    'uses' => 'TicketsController@popular',
]);
Route::get('/open', [
    'as' => 'tickets.open',
    'uses' => 'TicketsController@open',
]);
Route::get('/closed', [
    'as' => 'tickets.closed',
    'uses' => 'TicketsController@closed',
]);
Route::get('/show/{id}', [
    'as' => 'tickets.details',
    'uses' => 'TicketsController@details',
]);
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group(['middleware'=>'auth'],function (){


    Route::get('/create', [
        'as'   => 'tickets.create',
        'uses' => 'TicketsController@create'
    ]);

    Route::post('/create', [
        'as'   => 'tickets.store',
        'uses' => 'TicketsController@store'
    ]);

    Route::post('/vote/{id}',[
        'as'=>'votes.submit',
        'uses'=>'VotesController@submit'
    ]);

    Route::delete('/vote/{id}',[
        'as'=>'votes.destroy',
        'uses'=>'VotesController@destroy'
    ]);

    Route::post('comentar/{id}', [
        'as'    => 'comments.submit',
        'uses'  => 'CommentsController@submit',
    ]);

});


Route::auth();

//Route::get('/home', 'HomeController@index');
