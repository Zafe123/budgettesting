<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return redirect()->route('layouts.maindashboard');
// });

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/expenses', [HomeController::class, 'expenses'])->name('expenses');
// Route::get('/income', [HomeController::class, 'income'])->name('income');
// Route::get('/transact', [HomeController::class, 'transact'])->name('transact');


Route::get('/', function () {
    return view('layouts.maindashboard');
})->name('maindashboard');