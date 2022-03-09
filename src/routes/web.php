<?php

Route::group(['namespace' => 'Dinushchathurya\NationalityList\Http\Controllers'], function () {
    Route::get('/nationaliities', 'NationalityListController@nationality');
});
