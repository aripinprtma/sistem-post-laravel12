<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('admin.index');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::controller(KategoriController::class)->group(function () {
    Route::get('kategori', 'index')->name('kategori.index');
    Route::get('kategori/create', 'create')->name('kategori.create');
    Route::post('kategori', 'store')->name('kategori.store');
    Route::get('kategori/edit/{kategori}', 'edit')->name('kategori.edit');
    Route::put('kategori/{kategori}', 'update')->name('kategori.update');
    Route::delete('kategori/{kategori}', 'destroy')->name('kategori.destroy');
});

Route::controller(ProdukController::class)->group(function () {
    Route::get('produk', 'index')->name('produk.index');
    Route::get('produk/create', 'create')->name('produk.create');
    Route::post('produk', 'store')->name('produk.store');
    Route::get('produk/edit/{produk}', 'edit')->name('produk.edit');
    Route::put('produk/{produk}', 'update')->name('produk.update');
    Route::delete('produk/{produk}', 'destroy')->name('produk.destroy');
});

require __DIR__ . '/auth.php';