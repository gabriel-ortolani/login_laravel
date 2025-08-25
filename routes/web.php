<?php

use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cadastro-user', [Usercontroller::class, 'cadastro'])->name('user.cadastro');
Route::get('/login-user', [Usercontroller::class, 'login'])->name('user.login');
Route::post('/cadastar-user', [Usercontroller::class, 'cadastrar'])->name('user.cadastar');
Route::post('/logar-user', [Usercontroller::class, 'logar'])->name('user.logar');
Route::get('/home-user', [Usercontroller::class, 'home'])->name('user.home');
Route::get('../', [Usercontroller::class, 'welcome'])->name('welcome');
Route::get('/edit-user', [Usercontroller::class, 'edit'])->name('user.edit');
Route::get('/verificacao-user', [Usercontroller::class, 'verificacao'])->name('user.verificacao');
Route::post('/verificacao-user', [Usercontroller::class, 'verificar'])->name('user.verificar');
Route::post('/update-user', [Usercontroller::class, 'update'])->name('user.update');
