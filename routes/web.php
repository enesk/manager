<?php

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['prefix' => '/users/'], function () {
        Route::get('profile', 'UsersController@profile')->name('users.profile');
        Route::post('profile/update', 'UsersController@updateProfile')->name('users.profile.update');
        Route::get('billing', 'UsersController@billing')->name('users.billing');
        Route::post('billing/update', 'UsersController@updateBilling')->name('users.billing.update');
    });

    Route::group(['prefix' => '/organizations/'], function () {
        Route::post('save', 'OrganizationsController@save')->name('organization.save');
        Route::post('update', 'OrganizationsController@update')->name('organization.update');
        Route::get('edit', 'OrganizationsController@edit')->name('organization.billing');
    });

});