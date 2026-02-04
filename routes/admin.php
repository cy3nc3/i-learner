<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::view('school-years', 'admin.school-years')->name('school-years');
    Route::view('users', 'admin.users')->name('users');
    Route::view('settings', 'admin.settings')->name('settings');
});
