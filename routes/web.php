<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Container\Attributes\Auth;

Route::get('/',[HomeController::class,'homepage']);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

route::get('/home',[HomeController::class,'index'])->name('home');
/*
route::middleware('auth')->group(function(){
    route::get('/profile',[ProfileController::class,'edit'])->name('profile.edit');
    route::get('/profile',[ProfileController::class,'edit'])->name('profile.update');
    route::get('/profile',[ProfileController::class,'edit'])->name('profile.destroy');
});*/

Route::get('/post_page',[AdminController::class,'post_page']);
Route::post('/add_post',[AdminController::class,'add_post']);