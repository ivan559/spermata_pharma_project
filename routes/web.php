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
    return view('index');
});
/*
Route::get('/clientes/','ClientesController@index');
Route::get('/clientes/insert','ClientesController@create');*/
Route::resource('clientes','ClientesController');
Route::resource('proveedores','ProveedoresController');
Route::resource('medicamentos','MedicamentosController');
Route::resource('facturacion','MedicamentosxClientesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){
	//ROles
	Route::post('roles/store','RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');

	Route::get('roles','RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');

	Route::get('roles/create','RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');

	Route::put('roles/{role}','RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');

	Route::get('roles/{role}','RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');

	Route::delete('roles/{role}','RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');

	Route::post('roles/{role}/edit','RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit');	


  //Clientes
	Route::post('clientes/store','ClientesController@store')->name('clientes.store')
		->middleware('permission:clientes.create');

	Route::get('clientes','ClientesController@index')->name('clientes.index')
		->middleware('permission:clientes.index');

	Route::get('clientes/create','ClientesController@create')->name('clientes.create')
		->middleware('permission:clientes.create');

	Route::put('clientes/{role}','ClientesController@update')->name('clientes.update')
		->middleware('permission:clientes.edit');

	Route::get('clientes/{role}','ClientesController@show')->name('clientes.show')
		->middleware('permission:clientes.show');

	Route::delete('clientes/{role}','ClientesController@destroy')->name('clientes.destroy')
		->middleware('permission:clientes.destroy');

	Route::post('clientes/{role}/edit','ClientesController@edit')->name('clientes.edit')
		->middleware('permission:clientes.edit');	


   //Proveedores
		Route::post('proveedores/store','ProveedoresController@store')->name('proveedores.store')
		->middleware('permission:proveedores.create');

	Route::get('proveedores','ProveedoresController@index')->name('proveedores.index')
		->middleware('permission:proveedores.index');

	Route::get('proveedores/create','ProveedoresController@create')->name('proveedor.create')
		->middleware('permission:proveedores.create');

	Route::put('proveedores/{role}','ProveedoresController@update')->name('proveedores.update')
		->middleware('permission:proveedores.edit');

	Route::get('proveedores/{role}','ProveedoresController@show')->name('proveedores.show')
		->middleware('permission:proveedores.show');

	Route::delete('proveedores/{role}','ProveedoresController@destroy')->name('proveedores.destroy')
		->middleware('permission:proveedores.destroy');

	Route::post('proveedores/{role}/edit','ProveedoresController@edit')->name('proveedores.edit')
		->middleware('permission:proveedores.edit');	
	//Medicamentos

	Route::post('medicamentos/store','MedicamentosController@store')->name('medicamentos.store')
		->middleware('permission:medicamentos.create');

	Route::get('medicamentos','MedicamentosController@index')->name('medicamentos.index')
		->middleware('permission:medicamentos.index');

	Route::get('medicamentos/create','MedicamentosController@create')->name('medicamentos.create')
		->middleware('permission:medicamentos.create');

	Route::put('medicamentos/{medicamentos}/update','MedicamentosController@update')->name('medicamentos.update')
		->middleware('permission:medicamentos.edit');

	Route::get('medicamentos/{medicamentos}','MedicamentosController@show')->name('medicamentos.show')
		->middleware('permission:medicamentos.show');

	Route::delete('medicamentos/{medicamentos}','MedicamentosController@destroy')->name('medicamentos.destroy')
		->middleware('permission:medicamentos.destroy');

	Route::post('medicamentos/{medicamentos}/edit','MedicamentosController@edit')->name('medicamentos.edit')
		->middleware('permission:medicamentos.edit');	

	//MedicamentosXClientes
	Route::post('medicamentosxclientes/store','MedicamentosxClientesController@store')->name('medicamentosxclientes.store')
		->middleware('permission:medicamentosxclientes.create');

	Route::get('medicamentosxclientes','MedicamentosxClientesController@index')->name('medicamentosxclientes.index')
		->middleware('permission:medicamentosxclientes.index');

	Route::get('medicamentosxclientes/create','MedicamentosxClientesController@create')->name('medicamentosxclientes.create')
		->middleware('permission:medicamentosxclientes.create');

	Route::put('medicamentosxclientes/{role}','MedicamentosxClientesController@update')->name('medicamentosxclientes.update')
		->middleware('permission:medicamentosxclientes.edit');

	Route::get('medicamentosxclientes/{role}','MedicamentosxClientesController@show')->name('medicamentosxclientes.show')
		->middleware('permission:medicamentosxclientes.show');

	Route::delete('medicamentosxclientes/{role}','MedicamentosxClientesController@destroy')->name('medicamentosxclientes.destroy')
		->middleware('permission:medicamentosxclientes.destroy');

	Route::post('medicamentosxclientes/{role}/edit','MedicamentosxClientesController@edit')->name('medicamentosxclientes.edit')
		->middleware('permission:medicamentosxclientes.edit');	

	//users

	Route::post('user/store','UserController@store')->name('user.store')
		->middleware('permission:user.create');

	Route::get('user','UserController@index')->name('user.index')
		->middleware('permission:user.index');

	Route::get('user/create','UserController@create')->name('user.create')
		->middleware('permission:user.create');

	Route::put('user/{user}/update','UserController@update')->name('user.update')
		->middleware('permission:user.edit');

	Route::get('user/{user}','UserController@show')->name('user.show')
		->middleware('permission:user.show');

	Route::delete('user/{user}','UserController@destroy')->name('user.destroy')
		->middleware('permission:user.destroy');

	Route::get('user/{user}/edit','UserController@edit')->name('user.edit')
		->middleware('permission:user.edit');	

	Route::post('roles','RoleController@index')->name('roles.index')
		  ->middleware('permission:roles.index');

	
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
