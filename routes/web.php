<?php

Auth::routes();



Route::resources([
    'users'         => 'UserController',
    'campanies'     => 'CampanyController',
    'candidates'    => 'CandidateController',
    'jobs'          => 'JobController',
]);

Route::group(['prefix' => '/','middleware' => 'auth'], function () {
    Route::get('test', 'HomeController@test');
    Route::get('', function () {
        return view('pages/home');
    });
    Route::get('/home', function() {
        return view('pages/home');
    })->name('home');

    Route::get('/campany/profile', 'CampanyController@profile');
    Route::get('/candidate/profile', 'CandidateController@profile');
    Route::group(['prefix' => 'candidate'], function () {
        Route::get('/education', 'CandidateController@showEducation');
        Route::get('/skill', 'CandidateController@showSkill');
        Route::get('/experience', 'CandidateController@showExperience');
        Route::get('/with_work', 'CandidateController@showWithWork');
        Route::post('/education', 'CandidateController@updateEducation');
        Route::post('/skill', 'CandidateController@updateSkill');
        Route::post('/experience', 'CandidateController@updateExperience');
        Route::post('/with_work', 'CandidateController@updateWithWork');
    });
});