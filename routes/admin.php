<?php

use App\Acceso;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;

// ROUTES

/** USER ********************************************/
Route::get('user/index', [
		'as'	=> 'administrador.user.index',
		'uses'	=> 'Admin\UserController@index',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('user/create', [
		'as'	=> 'admin.user.create',
		'uses'	=> 'Admin\UserController@create',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::post('user/store', [
		'as'	=> 'admin.user.store',
		'uses'	=> 'Admin\UserController@store',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('user/edit/{user_id}', [
		'as'	=> 'admin.user.edit',
		'uses'	=> 'Admin\UserController@edit',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::put('user/update', [
		'as'	=> 'admin.user.update',
		'uses'	=> 'Admin\userController@update',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('user/{user}/show', [
		'as'	=> 'admin.user.show',
		'uses'	=> 'Admin\UserController@show',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('user/{id}/destroy', [
		'as'	=> 'admin.user.destroy',
		'uses'	=> 'Admin\UserController@destroy',	
	])->middleware(Authorize::class.':is_admin,'.Acceso::class);

Route::get('user/editpass/{id}', [
		'as'	=> 'admin.user.editpass',
		'uses'	=> 'Admin\UserController@editpass',	
	])->middleware(Authorize::class.':is_admin,'.Acceso::class);

/** DATAUSER *****************************************/
Route::get('datauser/edit/{id}', [
		'as'	=> 'admin.datauser.edit',
		'uses'	=> 'Admin\DataUserController@edit',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::put('datauser/update', [
		'as'	=> 'administrador.datauser.update',
		'uses'	=> 'Admin\DataUserController@update',	
	])->middleware('can:is_admin,'.Acceso::class);

/** ACCESO *******************************************/
Route::get('acceso/edit/{id}', [
		'as'	=> 'admin.acceso.edit',
		'uses'	=> 'Admin\AccesoController@edit',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::put('acceso/update', [
		'as'	=> 'admin.acceso.update',
		'uses'	=> 'Admin\AccesoController@update',	
	])->middleware('can:is_admin,'.Acceso::class);

/** DHORA ********************************************/

Route::get('dhora/edit/{id}',[
		'as'	=> 'admin.dhora.edit',
		'uses'	=> 'Admin\DHoraController@edit'
	])->middleware('can:is_admin,'.Acceso::class);

Route::put('dhora/update',[
		'as'	=> 'admin.dhora.update',
		'uses'	=> 'Admin\DHoraController@update'
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('dhora/lista',  [
		'as'	=> 'administrador.dhora.lista',
		'uses'	=> 'Admin\DHoraController@lista',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('dhora/list2Excel',[
		'as'	=> 'admin.dhora.list2Excel',
		'uses'	=> 'Admin\DHoraController@list2Excel'
	])->middleware('can:is_admin,'.Acceso::class);

/** CURSOGRUPO *******************************************/
Route::get('cursogrupo/index/{id?}', [
		'as'	=> 'admin.cursogrupo.index',
		'uses'	=> 'Admin\CursoGrupoController@index',	
	])->middleware(Authorize::class.':is_admin,'.Acceso::class);

Route::get('cursogrupo/edit/{id}', [
		'as'	=> 'admin.cursogrupo.edit',
		'uses'	=> 'Admin\CursoGrupoController@edit',	
	])->middleware(Authorize::class.':is_admin,'.Acceso::class);

/** DCURSO *******************************************/
Route::get('dcurso/index/{grupo_id}/{curso_id}', [
		'as'	=> 'admin.dcurso.index',
		'uses'	=> 'Admin\DcursoController@index',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('dcurso/edit/{id}', [
		'as'	=> 'admin.dcurso.edit',
		'uses'	=> 'Admin\DcursoController@edit',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::put('dcurso/update', [
		'as'	=> 'admin.dcurso.update',
		'uses'	=> 'Admin\DcursoController@update',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('dcurso/lista',  [
		'as'	=> 'administrador.dcurso.lista',
		'uses'	=> 'Admin\DCursoController@lista',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('dcurso/list2Excel',[
		'as'	=> 'admin.dcurso.list2Excel',
		'uses'	=> 'Admin\DCursoController@list2Excel'
	])->middleware('can:is_admin,'.Acceso::class);

/** GRUPO ********************************************/
Route::get('grupo/index',  [
		'as'	=> 'administrador.grupo.index',
		'uses'	=> 'Admin\GrupoController@index',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('grupo/create',  [
		'as'	=> 'admin.grupo.create',
		'uses'	=> 'Admin\GrupoController@create',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::post('grupo/store',  [
		'as'	=> 'admin.grupo.store',
		'uses'	=> 'Admin\GrupoController@store',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('grupo/edit/{id}',[
		'as'	=> 'admin.grupo.edit',
		'uses'	=> 'Admin\GrupoController@edit',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::put('grupo/update',  [
		'as'	=> 'admin.grupo.update',
		'uses'	=> 'Admin\GrupoController@update',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('grupo/orden',  [
		'as'	=> 'admin.grupo.orden',
		'uses'	=> 'Admin\GrupoController@orden',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('grupo/destroy/{id}',  [
		'as'	=> 'admin.grupo.destroy',
		'uses'	=> 'Admin\GrupoController@destroy',	
	])->middleware('can:is_admin,'.Acceso::class);


/** GRUPOUSERS *************CORREGIR NOMBRES**************************/
Route::get('usergrupos/index',  [
		'as'	=> 'administrador.usergrupo.index',
		'uses'	=> 'Admin\UserGrupoController@index',	
	])->middleware('can:is_admin,'.Acceso::class);

/** FRANJAS ***************************************/
Route::get('franjas/index',  [
		'as'	=> 'administrador.franja.index',
		'uses'	=> 'Admin\FranjaController@index',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('franjas/show',  [
		'as'	=> 'administrador.franja.show',
		'uses'	=> 'Admin\FranjaController@show',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('franjas/create',  [
		'as'	=> 'administrador.franja.create',
		'uses'	=> 'Admin\FranjaController@create',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::post('franjas/store',  [
		'as'	=> 'administrador.franja.store',
		'uses'	=> 'Admin\FranjaController@store',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('franjas/edit/{id}',  [
		'as'	=> 'admin.franja.edit',
		'uses'	=> 'Admin\FranjaController@edit',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::put('franjas/update',  [
		'as'	=> 'administrador.franja.update',
		'uses'	=> 'Admin\FranjaController@update',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('franjas/destroy/{id}',  [
		'as'	=> 'administrador.franja.destroy',
		'uses'	=> 'Admin\FranjaController@destroy',	
	])->middleware('can:is_admin,'.Acceso::class);



/** MENVIO *******************************************/
Route::get('menvios/index',  [
		'as'	=> 'administrador.menvio.index',
		'uses'	=> 'Admin\MenvioController@index',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('menvios/create',  [
		'as'	=> 'administrador.menvio.create',
		'uses'	=> 'Admin\MenvioController@create',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::post('menvios/store',  [
		'as'	=> 'administrador.menvio.store',
		'uses'	=> 'Admin\MenvioController@store',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('menvios/edit/{id}',  [
		'as'	=> 'administrador.menvio.edit',
		'uses'	=> 'Admin\MenvioController@edit',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::put('menvios/update',  [
		'as'	=> 'administrador.menvio.update',
		'uses'	=> 'Admin\MenvioController@update',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('menvios/show/{id}',  [
		'as'	=> 'administrador.menvio.show',
		'uses'	=> 'Admin\MenvioController@show',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('menvios/destroy/{id}',  [
		'as'	=> 'administrador.menvio.destroy',
		'uses'	=> 'Admin\MenvioController@destroy',	
	])->middleware('can:is_admin,'.Acceso::class);

/** DENVIO *******************************************/
Route::get('denvios/define/{id}',  [
		'as'	=> 'administrador.denvio.define',
		'uses'	=> 'Admin\DenvioController@define',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::put('denvios/update',  [
		'as'	=> 'administrador.denvio.update',
		'uses'	=> 'Admin\DenvioController@update',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('denvios/markall/{id}',  [
		'as'	=> 'administrador.denvio.markall',
		'uses'	=> 'Admin\DenvioController@markall',	
	])->middleware('can:is_admin,'.Acceso::class);

Route::get('denvios/unmarkall/{id}',  [
		'as'	=> 'administrador.denvio.unmarkall',
		'uses'	=> 'Admin\DenvioController@unmarkall',	
	])->middleware('can:is_admin,'.Acceso::class);

/** ENVIO *********************************************/
Route::get('envios/send/{id}', [
		'as'	=> 'administrador.envio.send',
		'uses'	=> 'Admin\EnvioController@send',	
	])->middleware('can:is_admin,'.Acceso::class);

/** PDF ***********************************************/
Route::put('PDF/silaboCurso', [
		'as'	=> 'admin.PDF.silaboCurso',
		'uses'	=> 'Admin\PDFController@silaboCurso',	
	])->middleware('can:is_admin,'.Acceso::class);
