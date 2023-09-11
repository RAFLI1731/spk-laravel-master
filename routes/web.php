<?php

use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\c_alternatif;
use App\Http\Controllers\c_bobot;
use App\Http\Controllers\c_kriteria;
use App\Http\Controllers\c_nilai_smart;
use App\Http\Controllers\c_ranking;
use App\Http\Controllers\c_subkriteria;
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

Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('index');

Route::middleware(['PreventBackHistory'])->group(function () {
    Auth::routes();
});

Route::view('/test', 'test');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('kriteria', c_kriteria::class, [
        'names' => [
            'index' => 'admin.kriteria.index',
            'store' => 'admin.kriteria.store',
            'update' => 'admin.kriteria.update',
            'destroy' => 'admin.kriteria.delete'
        ]
    ]);

    Route::resource('sub', c_subkriteria::class, [
        'names' => [
            'index' => 'admin.sub.index',
            'store' => 'admin.sub.store',
            'update' => 'admin.sub.update',
            'destroy' => 'admin.sub.delete'
        ]
    ]);

    Route::resource('bobot', c_bobot::class, [
        'names' => [
            'index' => 'admin.bobot.index',
            'store' => 'admin.bobot.store',
            'update' => 'admin.bobot.update',
            'destroy' => 'admin.bobot.delete'
        ]
    ]);
    Route::get('bobothitung', [c_bobot::class, 'bobot'])->name('admin.bobothitung');

    Route::resource('alternatif', c_alternatif::class, [
        'names' => [
            'index' => 'admin.alternatif.index',
            'store' => 'admin.alternatif.store',
            'update' => 'admin.alternatif.update',
            'destroy' => 'admin.alternatif.delete'
        ]
    ]);


    Route::resource('smart', c_nilai_smart::class, [
        'names' => [
            'index' => 'admin.smart.index',
            'store' => 'admin.smart.store',
            'update' => 'admin.smart.update',
            'utility' => 'admin.smart.utility',
            'akhir' =>  'admin.smart.akhir'
        ]
    ]);

    Route::resource('ranking', c_ranking::class, [
        'names' => [
            'index' => 'admin.ranking.index'
        ]
    ]);
    Route::post('databaru', [c_nilai_smart::class, 'databaru'])->name('admin.smart.databaru');

    Route::get('utility', [c_nilai_smart::class, 'utility'])->name('admin.smart.utility');
    Route::get('akhir', [c_nilai_smart::class, 'akhir'])->name('admin.smart.akhir');
    Route::get('create', [c_nilai_smart::class, 'create'])->name('admin.rank.create');
    Route::get('rank', [c_nilai_smart::class, 'rank'])->name('admin.rank.store');
});
