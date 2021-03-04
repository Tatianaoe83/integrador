<?php

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
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::get('/prueba',function(){
	return "Hola Lia";
});

Route::get('/bienvenida',function(){
	return "Bienvenida Querida Maestra";
});

//Route::get('/zapato','ZapatoController@index');
Route::resource('zapato','ZapatoController');

//Route::get('/createzapato','CreateZapatoController@index');
Route::resource('createzapato','CreateZapatoController');


Route::resource('rol', 'RolController');

Route::resource('inventario', 'InventarioController');


Route::resource('inventario', 'InventarioController');

;
Route::resource('direccion', 'DireccionController');
Route::resource('hospital', 'HospitalController');
Route::resource('paciente', 'PacienteController');

Route::resource('empleado', 'EmpleadoController');
Route::resource('doctor', 'DoctorController');
Route::resource('instrumentos', 'InstrumentosController');
Route::resource('instrumentos', 'InstrumentosController');
Route::resource('concurso', 'ConcursoController');
Route::resource('area', 'AreaController');
Route::resource('especialidad', 'EspecialidadController');
Route::resource('estatus', 'EstatusController');
Route::resource('doctor', 'DoctorController');
Route::resource('empleado', 'empleadoController');
Route::resource('hospital', 'hospitalController');
Route::resource('paciente', 'PacienteController');
Route::resource('piso', 'PisoController');
Route::resource('sevicio', 'sevicioController');
Route::resource('servicio', 'ServicioController');
Route::resource('cuarto', 'cuartoController');
Route::resource('pabellon', 'PabellonController');

Route::get('listaDoctor', 'DoctorController@listaDoctor');
Route::get('listaEmpleado', 'empleadoController@listaEmpleado');
Route::get('listaPaciente', 'PacienteController@listaPaciente');
Route::get('listaServicio', 'ServicioController@listaServicio');
Route::get('listaEspecialidad', 'EspecialidadController@listaEspecialidad');
Route::get('listaArea', 'AreaController@listaArea');
Route::get('listaEstatus', 'EstatusController@listaEstatus');
Route::get('listaHospital', 'HospitalController@listaHospital');
Route::get('listaPiso', 'PisoController@listaPiso');
Route::get('listaCuarto', 'cuartoController@listaCuarto');
Route::get('listaPabellon', 'PabellonController@listaPabellon');

Route::get('listaSuscripciones', 'SuscripcionController@listaSuscripciones');


Route::get('/grafica','GraficaController@grafica');

Route::get('/graficaPaquete','GraficaPaqueteController@graficaPaquete');


Route::resource('/asignacioncuarto','AsignacionCuartoController');
Route::resource('/horarioronda','HorarioRondaController');
Route::get('/paqueteshow','PaqueteController@ver');



Route::resource('/Itinerario','InscripcionController');
	
Route::get('Area/export', 'AreaExportController');
Route::get('Empleado/export', 'EmpleadoExportController');
Route::get('Paciente/export', 'PacienteExportController');
Route::get('Servicio/export', 'ServicioExportController');
Route::get('Doctor/export', 'DoctorExportController');
Route::get('Especialidad/export', 'EspecialidadExportController');
Route::get('Estatus/export', 'EstatusExportController');
Route::get('Hospital/export', 'HospitalExportController');
Route::get('Piso/export', 'PisoExportController');
Route::get('Cuarto/export', 'CuartoExportController');
Route::get('Pabellon/export', 'PabellonExportController');


Route::get('/formRonda','HorarioRondaController@create');

Route::get('/formCuarto','asignacioncuartoController@create');
Route::get('/formInscripcion','InscripcionController@create');




Route::resource('asignacioncuarto', 'AsignacionCuartoController');

Route::get('/Suscripcion','SuscripcionController@index');

Route::resource('paquete', 'PaqueteController');
