<?php
Route::get('/', [
    'as'   => 'tickets.latest',
    'uses' => 'TicketsController@latest'
]);
Route::get('/popular', [
    'as'   => 'tickets.popular',
    'uses' => 'TicketsController@popular'
]);
Route::get('/open', [
    'as'   => 'tickets.open',
    'uses' => 'TicketsController@open'
]);
Route::get('/closed', [
    'as'   => 'tickets.closed',
    'uses' => 'TicketsController@closed'
]);
Route::get('/show/{id}', [
    'as'   => 'tickets.details',
    'uses' => 'TicketsController@details'
]);
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);