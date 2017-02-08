<?php


//Route::group(['prefix'=>'admin','as'=>'admin.','middleware' => ['admin']],function(){

    Route::get('/',function(){
        return view('admin.pages.home.index');
    });

    Route::group(['prefix'=>'dashboard','as'=>'dashboard.'],function(){
        Route::get('/',['as'=>'index','uses'=>'Admin\DashboardController@index']);
    });

    Route::group(['prefix'=>'configuracao','as'=>'configuracao.'],function(){
        Route::get('/',['as'=>'index','uses'=>'Admin\ConfiguracaoController@index']);
        Route::any('update/{id}',['as'=>'update','uses'=>'Admin\ConfiguracaoController@update']);

        Route::group(['prefix'=>'social','as'=>'social.'],function(){
            Route::get('/',['as'=>'index','uses'=>'Admin\Configuracao\SocialController@index']);
            Route::get('create',['as'=>'create','uses'=>'Admin\Configuracao\SocialController@create']);
            Route::post('store',['as'=>'store','uses'=>'Admin\Configuracao\SocialController@store']);
            Route::get('edit/{id}',['as'=>'edit','uses'=>'Admin\Configuracao\SocialController@edit']);
            Route::any('update/{id}',['as'=>'update','uses'=>'Admin\Configuracao\SocialController@update']);
            Route::delete('delete/{id}',['as'=>'delete','uses'=>'Admin\Configuracao\SocialController@delete']);
        });

        Route::group(['prefix'=>'contato','as'=>'contato.'],function(){
            Route::get('/',['as'=>'index','uses'=>'Admin\Configuracao\ContatoController@index']);
            Route::get('create',['as'=>'create','uses'=>'Admin\Configuracao\ContatoController@create']);
            Route::post('store',['as'=>'store','uses'=>'Admin\Configuracao\ContatoController@store']);
            Route::get('edit/{id}',['as'=>'edit','uses'=>'Admin\Configuracao\ContatoController@edit']);
            Route::put('update/{id}',['as'=>'update','uses'=>'Admin\Configuracao\ContatoController@update']);
            Route::delete('delete/{id}',['as'=>'delete','uses'=>'Admin\Configuracao\ContatoController@delete']);
        });
    });

    Route::group(['prefix'=>'empresa','as'=>'empresa.'],function(){
        Route::get('/',['as'=>'index','uses'=>'Admin\EmpresaController@index']);
        Route::any('update/{id}',['as'=>'update','uses'=>'Admin\EmpresaController@update']);
    });

    Route::group(['prefix'=>'newsletter','as'=>'newsletter.'],function(){
        Route::get('/',['as'=>'index','uses'=>'Admin\NewsletterController@index']);
        Route::any('update/{id}',['as'=>'update','uses'=>'Admin\NewsletterController@update']);
    });

    Route::group(['prefix'=>'blog','as'=>'blog.'],function(){

        Route::group(['prefix'=>'categoria','as'=>'categoria.'],function(){
            Route::get('/',['as'=>'index','uses'=>'Admin\Blog\CategoriaController@index']);
            Route::get('create',['as'=>'create','uses'=>'Admin\Blog\CategoriaController@create']);
            Route::post('store',['as'=>'store','uses'=>'Admin\Blog\CategoriaController@store']);
            Route::get('edit/{id}',['as'=>'edit','uses'=>'Admin\Blog\CategoriaController@edit']);
            Route::any('update/{id}',['as'=>'update','uses'=>'Admin\Blog\CategoriaController@update']);
            Route::delete('delete/{id}',['as'=>'delete','uses'=>'Admin\Blog\CategoriaController@delete']);
            Route::delete('delete/midia/{id}',['as'=>'delete.midia','uses'=>'Admin\Blog\CategoriaController@deleteMidia']);
        });

        Route::group(['prefix'=>'post','as'=>'post.'],function(){
            Route::get('/',['as'=>'index','uses'=>'Admin\Blog\PostController@index']);
            Route::get('create',['as'=>'create','uses'=>'Admin\Blog\PostController@create']);
            Route::post('store',['as'=>'store','uses'=>'Admin\Blog\PostController@store']);
            Route::get('edit/{id}',['as'=>'edit','uses'=>'Admin\Blog\PostController@edit']);
            Route::get('edit/destaque/{id}',['as'=>'edit.destaque','uses'=>'Admin\Blog\PostController@destaque']);
            Route::any('update/{id}',['as'=>'update','uses'=>'Admin\Blog\PostController@update']);
            Route::delete('delete/{id}',['as'=>'delete','uses'=>'Admin\Blog\PostController@delete']);
            Route::delete('delete/midia/{id}',['as'=>'delete.midia','uses'=>'Admin\Blog\PostController@deleteMidia']);
        });

    });

    Route::group(['prefix'=>'site','as'=>'site.'],function(){
        Route::group(['prefix'=>'midia','as'=>'midia.'],function(){
            // Route::get('/',['as'=>'index','uses'=>'Admin\MidiaController@index']);
            // Route::delete('delete/{id}',['as'=>'delete','uses'=>'Admin\MidiaController@delete']);

        });

        Route::group(['prefix'=>'paginas','as'=>'paginas.'],function(){
            Route::get('/',['as'=>'index','uses'=>'Admin\Site\PaginasController@index']);
            Route::get('create',['as'=>'create','uses'=>'Admin\Site\PaginasController@create']);
            Route::post('store',['as'=>'store','uses'=>'Admin\Site\PaginasController@store']);
            Route::get('edit/{id}',['as'=>'edit','uses'=>'Admin\Site\PaginasController@edit']);
            Route::any('update/{id}',['as'=>'update','uses'=>'Admin\Site\PaginasController@update']);
            Route::delete('delete/{id}',['as'=>'delete','uses'=>'Admin\Site\PaginasController@delete']);
            Route::delete('delete/midia/{id}',['as'=>'delete.midia','uses'=>'Admin\Site\PaginasController@deleteMidia']);
        });
        Route::group(['prefix'=>'item_pagina','as'=>'item_pagina.'],function(){
            Route::get('/',['as'=>'index','uses'=>'Admin\Site\ItemPaginaController@index']);
            Route::get('create/{pagina}',['as'=>'create','uses'=>'Admin\Site\ItemPaginaController@create']);
            Route::post('store',['as'=>'store','uses'=>'Admin\Site\ItemPaginaController@store']);
            Route::get('edit/{id}',['as'=>'edit','uses'=>'Admin\Site\ItemPaginaController@edit']);
            Route::any('update/{id}',['as'=>'update','uses'=>'Admin\Site\ItemPaginaController@update']);
            Route::delete('delete/{id}',['as'=>'delete','uses'=>'Admin\Site\ItemPaginaController@delete']);
            Route::delete('delete/midia/{id}',['as'=>'delete.midia','uses'=>'Admin\Site\ItemPaginaController@deleteMidia']);
        });

        Route::group(['prefix'=>'slider','as'=>'slider.'],function(){
            Route::get('/',['as'=>'index','uses'=>'Admin\Site\SliderController@index']);
            Route::get('create',['as'=>'create','uses'=>'Admin\Site\SliderController@create']);
            Route::post('store',['as'=>'store','uses'=>'Admin\Site\SliderController@store']);
            Route::get('edit/{id}',['as'=>'edit','uses'=>'Admin\Site\SliderController@edit']);
            Route::any('update/{id}',['as'=>'update','uses'=>'Admin\Site\SliderController@update']);
            Route::delete('delete/{id}',['as'=>'delete','uses'=>'Admin\Site\SliderController@delete']);
            Route::delete('delete/midia/{id}',['as'=>'delete.midia','uses'=>'Admin\Site\SliderController@deleteMidia']);
        });

        Route::group(['prefix'=>'galeria','as'=>'galeria.'],function(){
            Route::get('/',['as'=>'index','uses'=>'Admin\Site\GaleriaController@index']);
            Route::get('create',['as'=>'create','uses'=>'Admin\Site\GaleriaController@create']);
            Route::post('store',['as'=>'store','uses'=>'Admin\Site\GaleriaController@store']);
            Route::get('edit/{id}',['as'=>'edit','uses'=>'Admin\Site\GaleriaController@edit']);
            Route::any('update/{id}',['as'=>'update','uses'=>'Admin\Site\GaleriaController@update']);
            Route::delete('delete/{id}',['as'=>'delete','uses'=>'Admin\Site\GaleriaController@delete']);
            Route::delete('delete/midia/{id}',['as'=>'delete.midia','uses'=>'Admin\Site\GaleriaController@deleteMidia']);
        });

        Route::group(['prefix'=>'publicidade','as'=>'publicidade.'],function(){
            Route::get('/',['as'=>'index','uses'=>'Admin\Site\PublicidadeController@index']);
            Route::get('create',['as'=>'create','uses'=>'Admin\Site\PublicidadeController@create']);
            Route::post('store',['as'=>'store','uses'=>'Admin\Site\PublicidadeController@store']);
            Route::get('edit/{id}',['as'=>'edit','uses'=>'Admin\Site\PublicidadeController@edit']);
            Route::any('update/{id}',['as'=>'update','uses'=>'Admin\Site\PublicidadeController@update']);
            Route::delete('delete/{id}',['as'=>'delete','uses'=>'Admin\Site\PublicidadeController@delete']);
            Route::delete('delete/midia/{id}',['as'=>'delete.midia','uses'=>'Admin\Site\PublicidadeController@deleteMidia']);
        });

        Route::group(['prefix'=>'scripts','as'=>'scripts.'],function(){
            Route::get('/',['as'=>'index','uses'=>'Admin\Site\ScriptsController@index']);
            Route::get('create',['as'=>'create','uses'=>'Admin\Site\ScriptsController@create']);
            Route::post('store',['as'=>'store','uses'=>'Admin\Site\ScriptsController@store']);
            Route::get('edit/{id}',['as'=>'edit','uses'=>'Admin\Site\ScriptsController@edit']);
            Route::any('update/{id}',['as'=>'update','uses'=>'Admin\Site\ScriptsController@update']);
            Route::delete('delete/{id}',['as'=>'delete','uses'=>'Admin\Site\ScriptsController@delete']);
            Route::delete('delete/midia/{id}',['as'=>'delete.midia','uses'=>'Admin\Site\ScriptsController@deleteMidia']);
        });

        Route::group(['prefix'=>'menu','as'=>'menu.'],function(){
            Route::get('/',['as'=>'index','uses'=>'Admin\Site\MenuController@index']);
            Route::get('create',['as'=>'create','uses'=>'Admin\Site\MenuController@create']);
            Route::post('store',['as'=>'store','uses'=>'Admin\Site\MenuController@store']);
            Route::get('edit/{id}',['as'=>'edit','uses'=>'Admin\Site\MenuController@edit']);
            Route::any('update/{id}',['as'=>'update','uses'=>'Admin\Site\MenuController@update']);
            Route::delete('delete/{id}',['as'=>'delete','uses'=>'Admin\Site\MenuController@delete']);
            Route::delete('delete/midia/{id}',['as'=>'delete.midia','uses'=>'Admin\Site\MenuController@deleteMidia']);
        });

        Route::group(['prefix'=>'publicidade','as'=>'publicidade.'],function(){
            Route::get('/',['as'=>'index','uses'=>'Admin\Site\PublicidadeController@index']);
            Route::get('create',['as'=>'create','uses'=>'Admin\Site\PublicidadeController@create']);
            Route::post('store',['as'=>'store','uses'=>'Admin\Site\PublicidadeController@store']);
            Route::get('edit/{id}',['as'=>'edit','uses'=>'Admin\Site\PublicidadeController@edit']);
            Route::any('update/{id}',['as'=>'update','uses'=>'Admin\Site\PublicidadeController@update']);
            Route::delete('delete/{id}',['as'=>'delete','uses'=>'Admin\Site\PublicidadeController@delete']);
            Route::delete('delete/midia/{id}',['as'=>'delete.midia','uses'=>'Admin\Site\PublicidadeController@deleteMidia']);
        });


//    });

});