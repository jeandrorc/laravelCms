<?php


Route::get('','Site\HomeController@index')->name('index');
Route::get('quem-somos', 'Site\AboutController@index')->name('about');
Route::get('clientes', 'Site\ClientsController@index')->name('clients');
Route::get('servicos', 'Site\ServiceController@index')->name('services');

Route::get('contato', 'Site\ContactController@index')->name('contact');
Route::post('contato', 'Site\ContactController@send')->name('contact.send');

Route::group(['prefix' => 'galeria', 'as' => 'galeria.'], function (){
   Route::get('', 'Site\GaleriaController@index')->name('index');
   Route::get('{slug}', 'Site\GaleriaController@show')->name('show');
});

Route::group(['prefix' => 'nossos-projetos', 'as' => 'projects.'], function (){
    Route::get('', 'Site\ProjectController@index')->name('index');
    Route::get('{slug}', 'Site\ProjectController@show')->name('show');
});

Route::group(['prefix' => 'noticias', 'as' => 'blog.'], function (){
    Route::get('', 'Site\BlogController@index')->name('index');
    Route::get('categoria/{categoria}', 'Site\BlogController@category')->name('categoria');
    Route::get('{categoria}/{noticia}', 'Site\BlogController@show')->name('categoria.post');
});

