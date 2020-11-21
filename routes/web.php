<?php



Route::get('/', function () {
    return view('page1');
});

Route::get('/about', function () {
    return view('page2');
});

Route::get('/contacts', function () {
    return view('page3');
});
