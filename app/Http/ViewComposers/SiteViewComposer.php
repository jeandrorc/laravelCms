<?php

namespace App\Http\ViewComposers;

use App\Models\Post;
use Illuminate\View\View;
use App\Models\Configuracao;
use App\Models\RedeSocial;
use App\Models\Contato;
use App\Models\Script;
use App\Models\Empresa;

class SiteViewComposer
{
    public function __construct()
    {
    }

    public function compose(View $view)
    {
        $view->with('config', $configuracaoes = ($configuracaoes = Configuracao::first()) ? $configuracaoes : []);
        $view->with('title' , $titulo = ($titulo = Configuracao::first()->titulo) ? $titulo : []);
        $view->with('contact', $contatos = ($contatos = Contato::all()) ? $contatos : []);
        $view->with('social_network',$redeSocial = ($redeSocial = RedeSocial::all()) ? $redeSocial : []);
        $view->with('scripts', $scripts = ($scripts = Script::all()) ? $scripts : []);
        $view->with('company', $empresa = ($empresa = Empresa::first())? $empresa : [] );
        $view->with('posts', Post::avaible()->take(4)->paginate());
    }
}