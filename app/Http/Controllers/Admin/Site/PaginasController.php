<?php

namespace App\Http\Controllers\Admin\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Pagina;
use App\Models\Midia; 
use App\Models\PaginaMidia;
use Storage;

class PaginasController extends Controller
{
    

    public function index()
    {
    	$paginas = Pagina::all();
    	return view('admin.pages.site.paginas.index',compact('paginas'));
    }

    public function create()
    {
    	return view('admin.pages.site.paginas.create');
    }

    public function store(Request $request)
    {

    	$input = $request->except('_token','_method','midias');
    	$pagina = Pagina::create($input);
    	if ($request->ajax()) {
    		$errors = [];
    		// dd($request->all());
    		foreach ($request->midias as $key => $file) {
    			$uploaded = $this->fileUpload($file);
    			$uploaded ? 
    			$midia = Midia::create(['ativo'=>1,'titulo'=>'','midia'=>$uploaded]) : 
    			$errors[] = "Erro ao fazer upload do arquivo";
    			$midia ? PaginaMidia::create(['midia_id'=>$midia->id,'pagina_id'=>$pagina->id]) :
    			$errors[] = "Erro ao vincular uma midia a pagina"; 
    		}

    		return ['status'=>'sucesso','errors'=>$errors,'redirect'=>route('admin.site.paginas.edit',[$pagina->id])];
    	}

    	if ($pagina) {
    		flash('Pagina criada com sucesso');
    		return redirect()->route('admin.site.paginas.edit',[$pagina->id]);
    	}
    		flash('Erro ao criar nova pagina','danger');
    		return redirect()->back()->withInput();

    }

    public function edit($id)
    {
    	$pagina = Pagina::find($id);
        $elementos = $pagina->elementos;
    	return view('admin.pages.site.paginas.edit',compact('pagina','elementos'));
    }

    public function update($id, Request $request)
    {
    	$pagina = Pagina::find($id);
    	$input = $request->except('_token','_method','midias');
    	$pagina->update($input);
    	$pagina->save();
    	if ($request->ajax()) {
    	// dd($request->midias);
    		$errors = [];
    		if ($request->midias) {
	    		foreach ($request->midias as $key => $file) {
	    			$uploaded = $this->fileUpload($file);
	    			$uploaded ? 
	    			$midia = Midia::create(['ativo'=>1,'titulo'=>'','midia'=>$uploaded]) : 
	    			$errors[] = "Erro ao fazer upload do arquivo";
	    			$midia ? PaginaMidia::create(['midia_id'=>$midia->id,'pagina_id'=>$pagina->id]) :
	    			$errors[] = "Erro ao vincular uma midia a pagina"; 
    			}

    		}

    		return ['status'=>'sucesso','errors'=>$errors,'redirect'=>route('admin.site.paginas.edit',[$pagina->id])];
    	}
    	if ($pagina) {
    		flash('Pagina atualizada com sucesso');
    		return redirect()->route('admin.site.paginas.edit',[$pagina->id]);
    	}
    		flash('Erro ao atualizar a pagina','danger');
    		return redirect()->back()->withInput();

    }

    public function delete($id)
    {
    	if (Pagina::destroy($id)) {
    		return ['status'=>'success'];
    	}
    		return false;
    }

    public function deleteMidia($id)
    {
    	$PaginaMidia = PaginaMidia::find($id);
    	$file = $PaginaMidia->midia->midia;
		Storage::disk('uploads')->delete($file);
		$PaginaMidia->delete();
    	return ['status'=>'sucesso'];
    }

    private function fileUpload($file){
        if ($file) {
          
            return $file->store('midia','uploads');
        }
    }
}
