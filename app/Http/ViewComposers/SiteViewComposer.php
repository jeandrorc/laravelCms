<?php

namespace App\Http\ViewComposers;

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
        $view->with('configuracao', $configuracaoes = ($configuracaoes = Configuracao::first()) ? $configuracaoes : []);
        $view->with('titulo' , $titulo = ($titulo = Configuracao::first()->titulo) ? $titulo : []);
        $view->with('contatos', $contatos = ($contatos = Contato::all()) ? $contatos : []);
        $view->with('redesSociais',$redeSocial = ($redeSocial = RedeSocial::all()) ? $redeSocial : []);
        $view->with('scripts', $scripts = ($scripts = Script::all()) ? $scripts : []);
        $view->with('empresa', $empresa = ($empresa = Empresa::all())? $empresa : [] );
    }
}