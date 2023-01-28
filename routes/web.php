<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;


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
// Auth::routes();

// Route::get('/overview', [HomeController::class, 'index'])->name('home');
// Route::get('/expenses', [HomeController::class, 'expenses'])->name('expenses');
// Route::get('/income', [HomeController::class, 'income'])->name('income');
// Route::get('/transact', [HomeController::class, 'transact'])->name('transact');


Route::get('/', function () {
    return view('dashboard.dpages.overview');
})->name('overview');

Route::get('/expenses', function () {
    return view('dashboard.dpages.expenses');
})->name('expenses');

Route::get('/history', function () {
    return view('dashboard.dpages.history');
})->name('history');

Route::get('/income', [IncomeController::class,'displayincome'])->name('income');