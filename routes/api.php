<?php

use App\Http\Controllers\AlbumController;

Route::get('/albums', [AlbumController::class, 'index']);
Route::post('/albums', [AlbumController::class, 'store']);
Route::get('/albums/{id}', [AlbumController::class, 'show']);
Route::put('/albums/{id}', [AlbumController::class, 'update']);
Route::delete('/albums/{id}', [AlbumController::class, 'destroy']);
