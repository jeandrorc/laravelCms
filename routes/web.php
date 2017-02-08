<?php


Route::get('admin/login',['as'=>'admin.login','uses'=>'Admin\AuthController@login']);
Route::post('admin/logar',['as'=>'admin.logar','uses'=>'Admin\AuthController@logar']);
Route::get('admin/logout',['as'=>'admin.logout','uses'=>'Admin\AuthController@logout']);

Route::get('construcao',['as'=>'site.construcao','uses'=>'Site\MaintaimentController@construcao']);
Route::get('manutencao',['as'=>'site.manutencao','uses'=>'Site\MaintaimentController@manutencao']);

Route::get('image/{size}/',['as'=>'resize.image','uses'=>'ImageController@fly']);
Route::post('upload-file',['as'=>'upload-file','uses'=>'Admin\ConfiguracaoController@upload']);
