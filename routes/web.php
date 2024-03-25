<?php
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/employees', [EmployeeController::class, 'index']);

Route::post('login', [AuthController::class, 'showLoginForm']);
