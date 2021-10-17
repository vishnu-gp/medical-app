<?php

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

Route::get('/', App\Http\Livewire\PatientTable::class);
Route::get('/patient_create', App\Http\Livewire\PatientCreate::class);
Route::get('/bp_log/{patient_id}', App\Http\Livewire\BpLog::class);