<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Image;
use App\Models\Midia;
class EmpresaController extends Controller
{
    
    protected $empresa;
	public function __construct()
	{
		$this->empresa = Empresa::firstOrCreate(['id'=>1]);
	}

    public function index()
    {
    	$empresa = $this->empresa;
    	return view('admin.pages.empresa.index',compact('empresa'));
    }

    public function update($id,Request $request)
    {	
    	$input = $request->except('_token','_method');
    	$empresa = Empresa::find($id);
    	 if($request->ajax()){
    	
               if ($request->logo) {
		    		$input['logo'] = $request->file('logo')->store('empresa','uploads');
                    $empresa->update($input);

		    		return ['status'=>'sucesso'];
                    
		    	}
          }
    	

    	$input['logo'] = $empresa->logo;
    	if ($empresa->update($input)) {
    		flash('Dados da empresa atualizado com sucesso');
    		return redirect()->back();
    	}
    		flash('Erro ao atualizar as informações','danger');
    		return redirect()->back();
    }
}
