<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard/administrasi');
});

// Dashboard Routes
Route::get('/dashboard/administrasi', function () {
    return view('dashboard.administrasi');
});

Route::get('/dashboard/administrasi/users', function () {
    return view('dashboard.administrasi.users');
});

Route::get('/dashboard/administrasi/roles', function () {
    return view('dashboard.administrasi.roles');
});

Route::get('/dashboard/administrasi/activity-log', function () {
    return view('dashboard.administrasi.activity-log');
});

Route::get('/dashboard/crm', function () {
    return view('dashboard.crm');
});

Route::get('/dashboard/crm/leads', function () {
    return view('dashboard.crm.leads');
});

Route::get('/dashboard/crm/pipeline', function () {
    return view('dashboard.crm.pipeline');
});

Route::get('/dashboard/crm/customers', function () {
    return view('dashboard.crm.customers');
});

Route::get('/dashboard/pos', function () {
    return view('dashboard.pos');
});

Route::get('/dashboard/inventory', function () {
    return view('dashboard.inventory');
});
