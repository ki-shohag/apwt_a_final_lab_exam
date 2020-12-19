<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\userController;
use App\Http\Controllers\employeeHomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['sess']], function () {
    Route::get('/home', [homeController::class, 'index']);
    Route::get('/employeeHome', [employeeHomeController::class, 'index']);
    Route::get('/manage-user', [userController::class, 'index']);
    Route::post('/manage-user/insert', [userController::class, 'storeUser']);
    Route::get('/manage-user/edit/{id}', [userController::class, 'editUser']);
    Route::post('/manage-user/edit/{id}', [userController::class, 'updateUser']);
    Route::get('/manage-user/delete/{id}', [userController::class, 'deleteUser']);
    Route::post('/manage-user/get-user', [userController::class, 'getUser']);
});
Route::get('/signup', [signupController::class, 'index']);
Route::post('/signup', [signupController::class, 'storeUser']);
Route::get('/login', [loginController::class, 'index']);
Route::post('/login', [loginController::class, 'verify']);
Route::get('/logout', [logoutController::class, 'index']);