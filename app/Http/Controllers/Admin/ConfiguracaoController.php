<?php

namespace App\Http\Controllers\Admin;

use App\Models\MailConfig;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Configuracao;
use App\Models\Contato;
use App\Models\RedeSocial;



class ConfiguracaoController extends Controller
{

    
    public function index()
    {
    	$configuracao = Configuracao::firstOrCreate([
    		'id'=>1
			]);
        $contatos = Contato::all();
        $redeSocial = RedeSocial::all();
        $mail = config('mail');
    	return view('admin.pages.configuracoes.index',compact('configuracao','contatos','redeSocial','mail'));
    }

    public function update($id, Request $request)
    {

    	$input = $request->except('_token','_method','mail');
    	$configuracao = Configuracao::find($id);
    	$this->updateMailConfig($request->mail);

    	if ($configuracao->update($input)) {
    		flash('Configurações atualizadas com sucesso');
    		return redirect()->back();
    	}
    		flash('Erro ao atualizar as configurações','danger');
    		return redirect()->back();
    }

    private function updateMailConfig($config)
    {
        MailConfig::query()->truncate();
        MailConfig::create($config);
    }
}
