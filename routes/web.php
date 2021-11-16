<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Livewire\Backend\Users\UserLists;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard',DashboardController::class)->name('admin.dashboard');
Route::get('/admin/users',UserLists::class)->name('admin.users');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
