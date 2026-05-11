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

Route::get('/dashboard/pos/kasir', function () {
    return view('dashboard.pos.kasir');
});

Route::get('/dashboard/pos/transactions', function () {
    return view('dashboard.pos.transactions');
});

Route::get('/dashboard/pos/promo', function () {
    return view('dashboard.pos.promo');
});

Route::get('/dashboard/inventory', function () {
    return view('dashboard.inventory');
});

Route::get('/dashboard/inventory/stock', function () {
    return view('dashboard.inventory.stock');
});

Route::get('/dashboard/inventory/masuk', function () {
    return view('dashboard.inventory.masuk');
});

Route::get('/dashboard/inventory/keluar', function () {
    return view('dashboard.inventory.keluar');
});
