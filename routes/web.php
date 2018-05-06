<?php


Route::get('/', function () {
    return view('pages/home');
});

Route::get('/home', function() {
    return view('pages/home');
})->name('home');

Route::resources([
    'users'         => 'UserController',
    'campanies'     => 'CampanyController',
    'candidates'    => 'CandidateController'
]);

Auth::routes();
