<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\StudySessionController;


Route::get('/', function () 
{
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);

Route::get('/study-sessions', [StudySessionController::class, 'index']);

Route::get('/study-sessions/create', [StudySessionController::class, 'create']);

Route::post('/study-sessions', [StudySessionController::class, 'store']);