<?php

namespace App\Http\Controllers\Admin\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Models\Pagina;
use App\Models\ItemPagina;
use App\Models\Midia; 
use App\Models\ItemPaginaMidia;
use Storage;

class ItemPaginaController extends Controller
{
     public function create($pagina)
	    {
	    	return view('admin.pages.site.paginas.pagina_element.create',['pagina'=>$pagina]);
	    }

	    public function store(Request $request)
	    {

	    	$input = $request->except('_token','_method','midias');
	    	$item_pagina = ItemPagina::create($input);
	    	if ($request->ajax()) {
	    		$errors = [];
	    		// dd($request->all());
	    		foreach ($request->midias as $key => $file) {
	    			$uploaded = $this->fileUpload($file);
	    			$uploaded ? 
	    			$midia = Midia::create(['ativo'=>1,'titulo'=>'','midia'=>$uploaded]) : 
	    			$errors[] = "Erro ao fazer upload do arquivo";
	    			$midia ? ItemPaginaMidia::create(['midia_id'=>$midia->id,'item_pagina_id'=>$item_pagina->id]) :
	    			$errors[] = "Erro ao vincular uma midia a pagina"; 
	    		}

	    		return ['status'=>'sucesso','errors'=>$errors,'redirect'=>route('admin.site.paginas.edit',[$item_pagina->pagina_id])];
	    	}

	    	if ($item_pagina) {
	    		flash('Item criado com sucesso');
	    		return redirect()->route('admin.site.paginas.edit',[$item_pagina->pagina_id]);
	    	}
	    		flash('Erro ao criar nova pagina','danger');
	    		return redirect()->back()->withInput();

	    }

	    public function edit($id)
	    {
	    	$item = ItemPagina::find($id);
	    	
	    	return view('admin.pages.site.paginas.pagina_element.edit',compact('item'));
	    	
	    }

	    public function update($id, Request $request)
	    {
	    	$item_pagina = ItemPagina::find($id);
	    	$input = $request->except('_token','_method','midias');
	    	$item_pagina->update($input);
	    	$item_pagina->save();
	    	if ($request->ajax()) {
	    	// dd($request->midias);
	    		$errors = [];
	    		if ($request->midias) {
		    		foreach ($request->midias as $key => $file) {
		    			$uploaded = $this->fileUpload($file);
		    			$uploaded ? 
		    			$midia = Midia::create(['ativo'=>1,'titulo'=>'','midia'=>$uploaded]) : 
		    			$errors[] = "Erro ao fazer upload do arquivo";
		    			$midia ? ItemPaginaMidia::create(['midia_id'=>$midia->id,'item_pagina_id'=>$item_pagina->id]) :
		    			$errors[] = "Erro ao vincular uma midia a pagina"; 
	    			}

	    		}

	    		return ['status'=>'sucesso','errors'=>$errors,'redirect'=>route('admin.site.paginas.edit',[$item_pagina->pagina_id])];
	    		
	    		
	    	}
	    	if ($item_pagina) {
	    		flash('Pagina atualizada com sucesso');
	    		return redirect()->route('admin.site.paginas.edit',[$item_pagina->pagina_id]);
	    	}
	    		flash('Erro ao atualizar a pagina','danger');
	    		return redirect()->back()->withInput();

	    }

	    public function delete($id)
	    {
	    	if (ItemPagina::destroy($id)) {
	    		return ['status'=>'success'];
	    	}
	    		return false;
	    }

	    public function deleteMidia($id)
	    {
	    	$item_PaginaMidia = ItemPaginaMidia::find($id);
	    	$file = $item_PaginaMidia->midia->midia;
			Storage::disk('uploads')->delete($file);
			$item_PaginaMidia->delete();
	    	return ['status'=>'sucesso'];
	    }

	    private function fileUpload($file){
	        if ($file) {
	          
	            return $file->store('midia','uploads');
	        }
	    }
}
