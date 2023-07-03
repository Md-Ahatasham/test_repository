<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Sham\ProfileEnhancer\app\Http\Controllers'], function (){
    Route::get('profile','ProfileController@index')->name('profile');
});

