<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', function () {
    return view('administrator');
});

Route::resource('login','LoginController');



Route::resource('berita', 'BeritaController');
Route::resource('visimisi', 'VisimisiController');
Route::resource('sejarah', 'SejarahController');