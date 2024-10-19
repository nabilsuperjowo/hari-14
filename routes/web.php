<?php

use Illuminate\Support\Facades\Route;

Route::get('/table', function () {
    return view('table');
});

Route::get('/data-tables', function () {
    return view('data-tables');
});


Route::get('/', function () {
    return view('welcome');
});
// routes/web.php
Route::get('/table', function () {
    return view('pages.table');
});

Route::get('/datatable', function () {
    return view('pages.datatable');
});


Route::get('/', function () {
    return view('table'); // Sesuaikan nama file blade yang kamu buat, misalnya 'table'
});

