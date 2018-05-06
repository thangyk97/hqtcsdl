<?php

Auth::routes();

Route::get('/home', function() {
    return view('pages/home');
})->name('home');

Route::resources([
    'users'         => 'UserController',
    'campanies'     => 'CampanyController',
    'candidates'    => 'CandidateController'
]);

Route::group(['prefix' => '/','middleware' => 'auth'], function () {
    Route::get('test', 'HomeController@test');
    // Route::get('', function () {
    //     return view('pages/home');
    // });
});

Route::get('/', function () {
    return view('pages/home');
});