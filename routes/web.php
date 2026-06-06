<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/projects', function () {
    return view('admin.projects');
});

Route::get('/admin/clients', function () {
    return view('admin.clients');
});

Route::get('/admin/messages', function () {
    return view('admin.messages');
});

Route::get('/admin/settings', function () {
    return view('admin.settings');
});
