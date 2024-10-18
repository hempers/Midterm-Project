<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\LogRequests;

Route::middleware([LogRequests::class])->group(function () {
    Route::get('/', function () {
        return view('portfolio');
    })->name('home');

    Route::get('/lab1', function () {
        return view('lab1');
    })->name('lab1');

    Route::get('/lab2', function () {
        return view('lab2');
    })->name('lab2');

    Route::get('/lab3', function () {
        return view('lab3');
    })->name('lab3');

    Route::get('/lab4', function () {
        return view('lab4');
    })->name('lab4');
    
    Route::get('/restricted-dashboard', function () {
        return "Access Restricted!";
    });

    Route::get('/access-denied', function () {
        return "Access Denied!";
    });
});

// Apply CheckAge middleware with a minimum age parameter
Route::middleware([CheckAge::class.':18'])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
