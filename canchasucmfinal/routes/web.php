<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| CONTRASEÑA DE GITHUB: laravelSW2 y el usuario es matiasIbera
*/


Route::get('/', function () {
    return view('welcome');
});

//rutas del administrador
Route::group(['prefix'=> 'admin','middleware' => ['auth','admin']], function(){

	// vista principal del administrador
	Route::get('/', function(){
		return view('admin.principal');
	})->name('admin.principal');

	//rutas de carreras

	Route::resource('carreras','CarreraController');
	Route::get('carreras/{id_carrera}/destroy',[
		'uses' => 'CarreraController@destroy',
		'as' => 'carreras.destroy'
	]);
	//rutas de usuarios
	Route::resource('usuarios','UsuarioController');
	Route::get('usuarios/{id}/destroy',[
		'uses' => 'UsuarioController@destroy',
		'as' => 'usuarios.destroy'
	]);
	//rutas de los horarios de futbol
	Route::resource('futbolhorarios','HorarioController');
	Route::get('futbolhorarios{id}/destroy',[
		'uses'=>'HorarioController@destroy',
		'as'=>'futbolhorarios.destroy'
	]);
	// rutas de los horarios de baby futbol
	Route::resource('babyhorarios','HorarioBabyController');
	Route::get('babyhorarios{id}/destroy',[
		'uses'=>'HorarioBabyController@destroy',
		'as'=>'babyhorarios.destroy'
	]);
	// rutas de los horarios de tenis
	Route::resource('tenishorarios','HorarioTenisController');
	Route::get('tenishorarios{id}/destroy',[
		'uses'=>'HorarioTenisController@destroy',
		'as'=>'tenishorarios.destroy'
	]);

	// rutas de las reservas para futbol

	Route::resource('futbolreservas','ReservaController');
	Route::get('futbolreservas{id}/destroy',[
		'uses'=>'ReservaController@destroy',
		'as'=> 'futbolreservas.destroy'
	]);
		// rutas de las reservas para baby futbol

	Route::resource('babyreservas','BabyReservaController');
	Route::get('babyreservas{id}/destroy',[
		'uses'=>'BabyReservaController@destroy',
		'as'=> 'babyreservas.destroy'
	]);
		// rutas de las reservas para tenis

	Route::resource('tenisreservas','TenisReservaController');
	Route::get('tenisreservas{id}/destroy',[
		'uses'=>'TenisReservaController@destroy',
		'as'=> 'tenisreservas.destroy'
	]);

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


	Route::group(['prefix'=>'usuario'], function(){

		//vista principal del usuario
		Route::get('/',function(){
		return view('inicio');
		});
		//Ruta para registrar usuarios
		Route::Resource('registro','RegistroController');
		Route::get('registro{id}/destroy',[
			'uses'=>'RegistroController@destroy',
			'as'=>'registro.destroy'
		]);

		//ruta para Mostrar las reservas de futbol del cliente
		Route::get('/reserva','ClienteController@reserva')->name('cliente.reserva');
		//Ruta para mostrar las reservas de baby del cliente
		Route::get('/reservababy','ClientebController@reserva')->name('clienteb.reserva');
		//Ruta para mostrar las reservas de tenis del cliente
		Route::get('/reservatenis','ClientetController@reserva')->name('clientet.reserva');

		//ruta para seleccionar la fecha que será comparativa con las fechas que estan ocupadas(FUTBOL)
		Route::get('/mostrarreserva','ClienteController@mostrar_reserva')->name('cliente.mostrar');
		//ruta que guarda la fecha seleccionada para compararla y despues se va a la ruta que muestra las reservas
		Route::post('/guardafecha','ClienteController@guarda_fecha')->name('cliente.guardafecha');
		//ruta que viene del guarda fecha y mmuestra las reservas con la fecha seleccionada
		//Route::get('/consultafecha','ClienteController@consulta_fecha')->name('cliente.consulta');


		Route::get('mostrarreservab','ClientebController@mostrar_reserva')->name('cliente.mostrarb');
		Route::post('/guardafechab','ClientebController@guarda_fecha')->name('cliente.guardafechab');

		Route::get('/mostrarreservat','ClientetController@mostrar_reserva')->name('cliente.mostrart');
		Route::post('/guardafechat','ClientetController@guarda_fecha')->name('cliente.guardafechat');



				//ruta para crear la reserva del cliente
		Route::get('/reserva/create', 'ClienteController@crear_reserva')->name('cliente.reserva.create');
		//ruta para guardar la reserva
		Route::post('/reserva', 'ClienteController@guardar_reserva')->name('cliente.reserva.store');

		Route::get('/reservab/createb','ClientebController@crear_reserva')->name('cliente.reservab.create');
		Route::post('/reservab','ClientebController@guardar_reserva')->name('cliente.reservab.store');

		Route::get('/reservat/createt','ClientetController@crear_reserva')->name('cliente.reservat.create');
		Route::post('/reservat','ClientetController@guardar_reserva')->name('cliente.reservat.store');



		Route::get('perfil','UsuarioController@perfil')->name('cliente.perfil');

});
// RUTAS DE LOS COORDINADORES
Route::group(['prefix'=>'coordinador'],function(){
	Route::get('/',function(){
		return view('coordinador.index');
	})->name('coordinador');

	Route::post('/consultafecha','CoordinadorController@consulta_fecha')->name('coordinador.consultafecha');
	Route::get('/coordinador/otrafecha','CoordinadorController@mostrar_fecha')->name('coordinador.otrafecha');	
});

Route::group(['prefix' =>'coordinadorT'],function(){
	Route::get('/',function(){
		return view('coordinador.indext');
	})->name('coordinadorT');
	Route::post('/consultafechat','CoordinadorTController@consulta_fecha')->name('coordinadorT.consultafechat');
	Route::get('coordinadorT/otrafechat','CoordinadorTController@mostrar_fecha')->name('coordinadorT.otrafechat');
});

Route::group(['prefix' =>'coordinadorB'],function(){
	Route::get('/',function(){
		return view('coordinador.indexb');
	})->name('coordinadorB');
	Route::post('/consultafechab','CoordinadorBController@consulta_fecha')->name('coordinadorB.consultafechab');
	Route::get('coordinadorB/otrafechab','CoordinadorBController@mostrar_fecha')->name('coordinadorB.otrafechab');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
