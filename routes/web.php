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

Route::get('/', function () {
    //return view('welcome');
    return view('auth.login');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::resource('autos', App\Http\Controllers\AutoController::class);
    Route::get('/compFoto/{id}', [App\Http\Controllers\AutoController::class, 'downloadFoto'])->name('compFoto');

    Route::resource('discoDuros', App\Http\Controllers\DiscoDuroController::class);

    Route::resource('marcaEquipos', App\Http\Controllers\MarcaEquipoController::class);

    Route::resource('modeloEquipos', App\Http\Controllers\ModeloEquipoController::class);

    Route::resource('rams', App\Http\Controllers\RamController::class);

    Route::resource('tipoEquipos', App\Http\Controllers\TipoEquipoController::class);

    Route::resource('documentoAutos', App\Http\Controllers\DocumentoAutoController::class);

    Route::resource('empleados', App\Http\Controllers\EmpleadoController::class);

    Route::resource('equipos', App\Http\Controllers\EquipoController::class);

    Route::resource('mantenimientoAutos', App\Http\Controllers\MantenimientoAutoController::class);

    Route::resource('proyectos', App\Http\Controllers\ProyectoController::class);

    Route::resource('tallers', App\Http\Controllers\TallerController::class);

    Route::resource('tenencias', App\Http\Controllers\TenenciaController::class);

    Route::resource('usuarios', App\Http\Controllers\UsuarioController::class);

    Route::resource('verificacions', App\Http\Controllers\VerificacionController::class);

    Route::resource('arrendadoras', App\Http\Controllers\ArrendadoraController::class);

    Route::resource('contratos', App\Http\Controllers\ContratoController::class);

    Route::get('/tarjeton/{id}', [App\Http\Controllers\DocumentoAutoController::class, 'downloadTarjeton'])->name('tarjeton');

    Route::get('/factura/{id}', [App\Http\Controllers\DocumentoAutoController::class, 'downloadfactura'])->name('factura');
    Route::get('/responsivaempleado/{id}', [App\Http\Controllers\DocumentoAutoController::class, 'downloadresponsivaempleado'])->name('responsivaempleado');
    Route::get('/ultimatenencia/{id}', [App\Http\Controllers\DocumentoAutoController::class, 'downloadultimatenencia'])->name('ultimatenencia');
    Route::get('/ultimaverificacion/{id}', [App\Http\Controllers\DocumentoAutoController::class, 'downloadultimaverificacion'])->name('ultimaverificacion');

});

