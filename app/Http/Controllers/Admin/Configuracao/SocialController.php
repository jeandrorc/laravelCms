<?php

namespace App\Http\Controllers\Admin\Configuracao;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\RedeSocial;

class SocialController extends Controller
{
            public function __construct()
        {
    
        }
    
    
        public function create()
        {
    		
    		return view('admin.pages.configuracoes.redeSocial.create');
        }
    
        public function store(Request $request)
        {
         

            if (RedeSocial::create($request->all())) {
                flash('Novo rede social adicionada com sucesso!');
               return  redirect()->route('admin.configuracao.index');
            }
                flash('Erro ao cadastrar rede social','danger');
              return   redirect()->back()->withInput();
        }
    
        public function edit($id)
        {
            $social = RedeSocial::find($id);
    		return view('admin.pages.configuracoes.redeSocial.edit',compact('social'));
        }
    
        public function update($id, Request $request)
        {   

            $input = $request->except(['_token','_method']);
            if (RedeSocial::where('id',$id)->update($input)) {
                flash('Rede social atualizada com sucesso!');
              return   redirect()->route('admin.configuracao.index');
            }
                flash('Erro ao atualizar rede social','danger');
              return   redirect()->back()->withInput();
    		
        }
        public function delete($id)
        {
            if (RedeSocial::destroy($id)) {
                return ['status'=>'success'];
            }
                return false;
        }
        public function destroy($id)
        {
            if (RedeSocial::destroy($id)) {
                flash('Rede social apagada com sucesso!');
               return  redirect()->route('admin.configuracao.index');
            }
        	   flash('Erro ao apagar rede social','danger');
              return   redirect()->back()->withInput();
        }
}
