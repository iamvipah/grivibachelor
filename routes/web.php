<?php


// Route for default
Route::get('/{any?}', function () {
    return view('welcome');
})->where('any', '.*');
