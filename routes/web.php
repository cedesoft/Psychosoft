<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventosController;
use App\Http\Livewire\FichaPaciente;
use App\Http\Livewire\ExpedienteMedico;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/agenda', function () {
    return view('agenda.index');
});

Route::resource('agenda', EventosController::class);

Route::get('/eventos', function () {
    return view('agenda.events');
});

Route::get('/perfil', function () {
    return view('profile.show');
});

Route::get('/pacientes/agregar', function () {
    return view('pacientes.add');
});

Route::get('/pacientes/habilitar-desactivar', function () {
    return view('pacientes.enable_disable');
});

Route::get('/pacientes/editar', function () {
    return view('pacientes.edit');
});

Route::get('/pacientes', function () {
    return view('pacientes.show');
});
