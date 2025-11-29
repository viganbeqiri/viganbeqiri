<?php

use App\Http\Controllers\VelosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/velos-create-lead', [VelosController::class, 'createLead'])->name('velosCreateLead');
