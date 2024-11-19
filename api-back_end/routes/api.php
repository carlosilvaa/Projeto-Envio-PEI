<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\GesusuController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ProfessorController;
use Illuminate\Support\Facades\Route;

Route::apiResource('alunos', AlunoController::class);
// Route::apiResource('usuarios', GesusuController::class);
Route::apiResource('materias', MateriaController::class);
Route::apiResource('professor', ProfessorController::class);
Route::post('usuarios/cadastrar', [GesusuController::class, 'create']);
Route::post('usuarios/login', [GesusuController::class, 'login']);
