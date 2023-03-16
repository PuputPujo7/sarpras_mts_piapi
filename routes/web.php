<?php

use App\Http\Livewire\NotFound;
use App\Http\Livewire\Pemohon;
use App\Http\Livewire\Survey;
use App\Http\Livewire\Terimakasih;
use App\Http\Livewire\AddBarang;
use App\Http\Livewire\Home;
use App\Http\Livewire\ListBarang;
use App\Http\Livewire\Login;
use App\Http\Livewire\Register;
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

// Route::view('/', 'welcome')->name('home');

Route::get('/pemohon', Pemohon::class)->name('pemohon');

Route::get('/survey/{nomorTiket}', Survey::class)->name('survey');

Route::get('/not-found', NotFound::class)->name('notfound');

Route::get('/thanks', Terimakasih::class)->name('thanks');

Route::get('/add-barang', AddBarang::class)->name('add-barang');

Route::get('/list-barang', ListBarang::class)->name('list-barang');

Route::get('/login', Login::class)->name('login');

Route::get('/', Home::class)->name('home');

Route::get('/register', Register::class)->name('register');

// Route::group(['middleware' => 'user'], function(){

    //register
    // Route::livewire('/register', 'auth.register')
    // ->layout('layouts.app')->name('auth.register');

    // // login
    // Route::livewire('/login', 'auth.login')
    // ->layout('layouts.app')->name('auth.login');

// });

//login
// Route::livewire('/login', 'auth.login')
// ->layout('layouts.app')->name('auth.login');