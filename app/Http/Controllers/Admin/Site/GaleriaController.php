<?php

namespace App\Http\Controllers\Admin\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Galeria;
use App\Models\Midia;
use App\Models\GaleriaMidia;

use Storage;


class GaleriaController extends Controller
{
        public function __construct()
        {
    		
        }
    
        public function index()
        {
		    	$galerias = Galeria::all();
    			return view('admin.pages.site.galeria.index',compact('galerias'));
        }
    
        public function create()
        {
    			return view('admin.pages.site.galeria.create');
    		
        }
    
        public function store(Request $request)
        {
    			$input = $request->except('_token','_method','midias');
		        // dd($input);
		    	$galeria = Galeria::create($input);
		    	if ($request->ajax()) {
		    		$errors = [];
		    		// dd($request->all());
		    		foreach ($request->midias as $key => $file) {
		    			$uploaded = $this->fileUpload($file,$galeria);
		    			$uploaded ? 
		    			$midia = Midia::create(['ativo'=>1,'titulo'=>'','midia'=>$uploaded]) : 
		    			$errors[] = "Erro ao fazer upload do arquivo";
		    			$midia ? GaleriaMidia::create(['midia_id'=>$midia->id,'galeria_id'=>$galeria->id]) :
		    			$errors[] = "Erro ao vincular uma midia a galeria"; 
		    		}

		    		return ['status'=>'sucesso','errors'=>$errors,'redirect'=>route('admin.site.galeria.edit',[$galeria->id])];
		    	}

		    	if ($galeria) {
		    		flash('galeria criada com sucesso');
		    		return redirect()->route('admin.site.galeria.edit',[$galeria->id]);
		    	}
		    		flash('Erro ao criar nova galeria','danger');
		    		return redirect()->back()->withInput();
        }
    
        public function edit($id)
        {
        	$galeria = Galeria::find($id);
    			return view('admin.pages.site.galeria.edit',compact('galeria'));
    		
        }
    
        public function update($id, Request $request)
        {
        	$galeria = Galeria::find($id);
	    	$input = $request->except('_token','_method','midias');
	    	$galeria->update($input);
	    	$galeria->save();
	    	if ($request->ajax()) {
	    		$errors = [];
	    		// dd($request->all());
	    		foreach ($request->midias as $key => $file) {
	    			$uploaded = $this->fileUpload($file,$galeria);
	    			$uploaded ? 
	    			$midia = Midia::create(['ativo'=>1,'titulo'=>'','midia'=>$uploaded]) : 
	    			$errors[] = "Erro ao fazer upload do arquivo";
	    			$midia ? GaleriaMidia::create(['midia_id'=>$midia->id,'galeria_id'=>$galeria->id]) :
	    			$errors[] = "Erro ao vincular uma midia a galeria"; 
	    		}

	    		return ['status'=>'sucesso','errors'=>$errors,'redirect'=>route('admin.site.galeria.edit',[$galeria->id])];
	    	}
	    	if ($galeria) {
	    		flash('galeria atualizada com sucesso');
	    		return redirect()->route('admin.site.galeria.edit',[$galeria->id]);
	    	}
	    		flash('Erro ao atualizar a galeria','danger');
	    		return redirect()->back()->withInput();
        }
    
        public function destroy($id)
        {
        	if (Galeria::destroy($id)) {
	    		return ['status'=>'success'];
	    	}
	    		return false;
        }
        public function deleteMidia($id)
	    {
	    	$GaleriaMidia = GaleriaMidia::find($id);
	        // dd($GaleriaMidia);
	    	$file = $GaleriaMidia->midia->midia;

	    	// dd(Storage::disk('uploads')->delete($GaleriaMidia->midia->midia));
	    	if (Storage::disk('uploads')->delete($file)) {
	    		$GaleriaMidia->delete();
	    		return ['status'=>'success'];
	    	}else{
	            if ($GaleriaMidia->delete()) {
	                return ['status'=>'success'];
	             } 	
	    	}
	    }

        private function fileUpload($file,Galeria $galeria){
			return $file->store('midia/galeria/'.$galeria->id,'uploads');
    	}		
}
