<?php

use App\Http\Controllers\PacienteApiController;
use App\Http\Controllers\PacienteController;

// A rota de importação deve vir antes do resource!
Route::get('/pacientes/importar', [PacienteApiController::class, 'importar'])->name('pacientes.importar');

Route::resource('pacientes', PacienteController::class);

Route::get('/pacientes/export/csv', [PacienteController::class, 'exportCsv'])->name('pacientes.export.csv');