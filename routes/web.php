<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodosController::class,'index'])->name('index')->middleware('auth');
Route::post('store/todo',[TodosController::class,'store'])->name('todos.store')->middleware('auth');
Route::put('updte/todo/{id}',[TodosController::class,'update'])->name('todos.update')->middleware('auth');
Route::delete('/delete/todo/{id}',[TodosController::class,'destroy'])->name('todos.destroy')->middleware('auth');

Route::get('login',[AuthController::class,'showLogin'])->name('login')->middleware('guest');
Route::post('login',[AuthController::class,'login'])->name('post.login')->middleware('guest');
Route::get('register',[AuthController::class,'showRegister'])->name('register')->middleware('guest');
Route::post('register',[AuthController::class,'register'])->name('post.register')->middleware('guest');
Route::post('logout',[AuthController::class,'logout'])->name('logout')->middleware('auth');