<?php

namespace App\Http\Controllers\Admin\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Script;
class ScriptsController extends Controller
{
    

        public function __construct()
        {
    
        }
    
        public function index()
        {
        	$scripts = Script::all();
    		return view('admin.pages.site.scripts.index',compact('scripts'));
        }	
    
        public function create()
        {
    		return view('admin.pages.site.scripts.create');
        }
    
        public function store(Request $request)
        {
    		if ($script = Script::create($request->all())) {

    			flash('Script cadastrado com sucesso');
    			return redirect()->route('admin.site.scripts.edit',[$script->id]);
    			
    		}
    			flash('erro ao cadastrar script','warning');
    			return redirect()->back()->withInput();
        }
    
        public function edit($id)
        {
        	$script = Script::find($id);
    		return view('admin.pages.site.scripts.edit',compact('script'));
        }
    
        public function update($id, Request $request)
        {
    		$script = Script::find($id);

    		if ($script->update($request->all())) {
				flash('Script editado com sucesso');
    			return redirect()->route('admin.site.scripts.edit',[$script->id]);
    			
    		}
    			flash('erro ao editar script','warning');
    			return redirect()->back()->withInput();
        }
    
        public function destroy($id)
        {
        	if (Script::destry($id)) {
        		flash('Script excluido com sucesso');
        		return redirect()->back();
        	}
        		flash('Erro ao tentar excluir o registro','danger');
        		return redirect()->back();
        }
}
