<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/counter', function () {
    return view('welcome');
})->name('counter');
Route::get('/calculator', \App\Http\Livewire\Calculator::class)->name('calculator');
Route::get('/todo-list', \App\Http\Livewire\Todolist::class)->name('todo-list');
Route::get('/cascading-dropdown', \App\Http\Livewire\CascadingDropdown::class)->name('cascading-dropdown');
Route::get('/products', \App\Http\Livewire\ProductSearch::class)->name('products');
Route::get('/image-upload', \App\Http\Livewire\ImageUpload::class)->name('image-upload');
Route::get('/register', \App\Http\Livewire\RegisterForm::class)->name('register');
