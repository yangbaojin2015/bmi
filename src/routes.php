<?php
Route::group(['namespace' => 'Sunnyday\BMI\Controllers', 'prefix' => 'sunnyday/bmi'], function () {
    Route::get('/', ['as' => 'bmi_path', 'uses' => 'BMIController@index']);
});