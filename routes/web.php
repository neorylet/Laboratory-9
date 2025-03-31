<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get("/login", [AuthController::class, "login"])->name("login");
Route::post("/login", [AuthController::class, "loginPost"]) ->name("login.post");

Route::get("/register", [AuthController::class,"register"])->name("register");
Route::post("/register", [AuthController::class, "registerPost"]) ->name("register.post");

Route::get('password/reset', [AuthController::class, "password.request"])->name('password.request');

Route::get('/homepage', [AuthController::class, "admin"]);
Route::middleware("auth")->group(function(){
    Route::post('/homepage', [AuthController::class, "homepage"])->name("homepage");
});
