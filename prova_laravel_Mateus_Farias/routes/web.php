<?php

use Illuminate\Support\Facades\Route;

//Tabeliao

 Route::get('/admin/tabeliaos', 'Admin\TabeliaoController@index')
     ->name('admin.tabeliaos');

 Route::get('/admin/tabeliaos/adicionar', 'Admin\TabeliaoController@adicionar')
     ->name('admin.tabeliaos.adicionar');

 Route::post('/admin/tabeliaos/salvar', 'Admin\TabeliaoController@salvar')
     ->name('admin.tabeliaos.salvar');

 Route::get('admin/tabeliaos/editar/{id}', 'Admin\TabeliaoController@editar')
     ->name('admin.tabeliaos.editar');

 Route::put('admin/tabeliaos/atualizar/{id}', 'Admin\TabeliaoController@atualizar')
     ->name('admin.tabeliaos.atualizar');
     
 Route::delete('/admin/tabeliaos/deletar/{id}', 'Admin\TabeliaoController@deletar')
     ->name('admin.tabeliaos.deletar');


//Certidao

Route::get('/admin/certidaos', 'Admin\CertidaoController@index')
->name('admin.certidaos');

Route::get('/admin/certidaos/adicionar', 'Admin\CertidaoController@adicionar')
->name('admin.certidaos.adicionar');

Route::post('/admin/certidaos/salvar', 'Admin\CertidaoController@salvar')
->name('admin.certidaos.salvar');

Route::get('admin/certidaos/editar/{id}', 'Admin\CertidaoController@editar')
->name('admin.certidaos.editar');

Route::put('admin/certidaos/atualizar/{id}', 'Admin\CertidaoController@atualizar')
->name('admin.certidaos.atualizar');

Route::delete('/admin/certidaos/deletar/{id}', 'Admin\CertidaoController@deletar')
->name('admin.certidaos.deletar');

//Contrato

Route::get('/admin/contratos', 'Admin\ContratoController@index')
->name('admin.contratos');

Route::get('/admin/contratos/adicionar', 'Admin\ContratoController@adicionar')
->name('admin.contratos.adicionar');

Route::post('/admin/contratos/salvar', 'Admin\ContratoController@salvar')
->name('admin.contratos.salvar');

Route::get('admin/contratos/editar/{id}', 'Admin\ContratoController@editar')
->name('admin.contratos.editar');

Route::put('admin/contratos/atualizar/{id}', 'Admin\ContratoController@atualizar')
->name('admin.contratos.atualizar');

Route::delete('/admin/contratos/deletar/{id}', 'Admin\ContratoController@deletar')
->name('admin.contratos.deletar');