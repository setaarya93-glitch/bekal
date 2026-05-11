<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard/administrasi');
});

// Dashboard Routes
Route::get('/dashboard/administrasi', function () {
    return view('dashboard.administrasi');
});

Route::get('/dashboard/crm', function () {
    return view('dashboard.crm');
});

Route::get('/dashboard/pos', function () {
    return view('dashboard.pos');
});

Route::get('/dashboard/inventory', function () {
    return view('dashboard.inventory');
});
