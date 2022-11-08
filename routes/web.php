<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ErmController;
use App\Http\Controllers\Erm2Controller;

Route::get('/', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'authenticate'])->middleware('guest')->name('login');
Route::post('register', [LoginController::class, 'register'])->middleware('guest')->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('cariunit', [ErmController::class, 'cariunit'])->name('cariunit');

Route::group(['middleware' => ['hak_akses:2','auth']], function () {
    Route::get('/erm', [ErmController::class, 'index'])->name('erm');
    Route::post('/ambildatapasien', [ErmController::class, 'ambildatapasien'])->name('ambildatapasien');
    Route::post('/ermform', [ErmController::class, 'formpasien'])->name('ermform');
    Route::post('/pilihform', [ErmController::class, 'pilihform'])->name('pilihform');
    Route::post('/carilayanan', [ErmController::class, 'carilayanan'])->name('carilayanan');
    Route::post('/simpanrm02', [ErmController::class, 'simpanrm02'])->name('simpanrm02');
    Route::post('/simpanrm02edit', [ErmController::class, 'simpanrm02edit'])->name('simpanrm02edit');
    Route::post('/simpanformanakbaru', [ErmController::class, 'simpanformanakbaru'])->name('simpanformanakbaru');
    Route::post('/simpanrm02lama', [ErmController::class, 'simpanrm02lama'])->name('simpanrm02lama');
    Route::post('/simpanrmanak', [ErmController::class, 'simpanrmanak'])->name('simpanrmanak');
    Route::get('/caritarif', [ErmController::class, 'caritarif'])->name('caritarif');
    Route::get('/caritarif', [ErmController::class, 'caritarif'])->name('caritarif');
});

Route::post('/editform', [ErmController::class, 'editform'])->name('editform');
Route::post('tampilcppt', [ErmController::class, 'tampilcppt'])->middleware('auth')->name('tampilcppt');
Route::post('tampilcppt2', [ErmController::class, 'tampilcppt'])->middleware('auth')->name('tampilcppt2');
Route::post('tampilresume', [ErmController::class, 'tampilresume'])->middleware('auth')->name('tampilresume');
Route::post('/tampilresume_lama', [ErmController::class, 'tampilresume_lama'])->name('tampilresume_lama');

Route::group(['middleware' => 'hak_akses:3', 'auth'], function () {
    Route::get('ermdokter', [Erm2Controller::class, 'index'])->name('ermdokter');
    Route::post('/ambildatapasien2', [Erm2Controller::class, 'ambildatapasien'])->name('ambildatapasien2');
    Route::get('/ermdokter', [Erm2Controller::class, 'index']);
    Route::post('/ermform2', [Erm2Controller::class, 'formpasien'])->name('ermform2');
    Route::post('/pilihform2', [Erm2Controller::class, 'pilihform'])->name('pilihform2');
    Route::post('/simpanrm03', [Erm2Controller::class, 'simpanrm03'])->name('simpanrm03');
    Route::post('/simpanradiologi', [ErmController::class, 'simpanradiologi'])->name('simpanradiologi');
    Route::post('/simpanformlab', [ErmController::class, 'simpanformlab'])->name('simpanformlab');
    Route::post('/simpanlayanan', [ErmController::class, 'simpanlayanan'])->name('simpanlayanan');
});