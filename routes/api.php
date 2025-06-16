<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\GameController;
Route::post('/setResultData', [GameController::class, 'setResultData'])->name('setResultData');
