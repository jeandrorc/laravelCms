<?php

namespace App\Http\Controllers\Admin\Configuracao;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Contato;

class ContatoController extends Controller
{
    

        public function __construct()
        {
    
        }
    
    
        public function create()
        {
            
            return view('admin.pages.configuracoes.contato.create');
        }
    
        public function store(Request $request)
        {
            // dd($request->all());
            if (Contato::create($request->all())) {
                flash('Novo rede social adicionada com sucesso!');
                return redirect()->route('admin.configuracao.index');
            }
                flash('Erro ao cadastrar rede social','danger');
                return redirect()->back()->withInput();
        }
    
        public function edit($id)
        {
            $contato = Contato::find($id);
            return view('admin.pages.configuracoes.contato.edit',compact('contato'));
        }
    
        public function update($id, Request $request)
        {   
            $Contato = Contato::find($id);

            if ($Contato->update($request->all())) {
                flash('Rede social atualizada com sucesso!');
                return redirect()->route('admin.configuracao.index');
            }
                flash('Erro ao atualizar rede social','danger');
                return redirect()->back()->withInput();
            
        }
        public function delete($id)
        {
            if (Contato::destroy($id)) {
                return ['status'=>'success'];
            }
                return false;
        }
        public function destroy($id)
        {
            if (Contato::destroy($id)) {
                flash('Rede social apagada com sucesso!');
                return redirect()->route('admin.configuracao.index');
            }
               flash('Erro ao apagar rede social','danger');
                return redirect()->back()->withInput();
        }
}
