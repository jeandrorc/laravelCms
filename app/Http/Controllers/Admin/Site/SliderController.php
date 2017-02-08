<?php

namespace App\Http\Controllers\Admin\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Midia;
use App\Models\Pagina;
use App\Models\Slider;
use App\Models\SliderMidia;
use Storage;

class SliderController extends Controller
{
    
    public function index()
    {
    	$sliders = Slider::all();
    	return view('admin.pages.site.slider.index',compact('sliders'));
    }

    public function create()
    {
        $secoes = Pagina::all();
    	return view('admin.pages.site.slider.create',compact('secoes'));
    }

    public function store(Request $request)
    {
    	$input = $request->except('_token','_method','midias');
    	$slider = Slider::create($input);
    	if ($request->ajax()) {
    		$errors = [];
    		// dd($request->all());
    		foreach ($request->midias as $key => $file) {
    			$uploaded = $this->fileUpload($file);
    			$uploaded ? 
    			$midia = Midia::create(['ativo'=>1,'titulo'=>'','midia'=>$uploaded]) : 
    			$errors[] = "Erro ao fazer upload do arquivo";
    			$midia ? SliderMidia::create(['midia_id'=>$midia->id,'slider_id'=>$slider->id]) :
    			$errors[] = "Erro ao vincular uma midia a slider"; 
    		}

    		return ['status'=>'sucesso','errors'=>$errors,'redirect'=>route('admin.site.slider.edit',[$slider->id])];
    	}

    	if ($slider) {
    		flash('slider criada com sucesso');
    		return redirect()->route('admin.site.slider.edit',[$slider->id]);
    	}
    		flash('Erro ao criar nova slider','danger');
    		return redirect()->back()->withInput();

    }

    public function edit($id)
    {
    	$secoes = Pagina::all();
        $slider = Slider::find($id);
    	return view('admin.pages.site.slider.edit',compact('secoes','slider'));
    }

    public function update($id, Request $request)
    {
    	$slider = Slider::find($id);
    	$input = $request->except('_token','_method','midias');
    	$slider->update($input);
    	$slider->save();
    	if ($request->ajax()) {
    		$errors = [];
    		// dd($request->all());
    		foreach ($request->midias as $key => $file) {
    			$uploaded = $this->fileUpload($file);
    			$uploaded ? 
    			$midia = Midia::create(['ativo'=>1,'titulo'=>'','midia'=>$uploaded]) : 
    			$errors[] = "Erro ao fazer upload do arquivo";
    			$midia ? SliderMidia::create(['midia_id'=>$midia->id,'slider_id'=>$slider->id]) :
    			$errors[] = "Erro ao vincular uma midia a slider"; 
    		}

    		return ['status'=>'sucesso','errors'=>$errors,'redirect'=>route('admin.site.slider.edit',[$slider->id])];
    	}
    	if ($slider) {
    		flash('slider atualizada com sucesso');
    		return redirect()->route('admin.site.slider.edit',[$slider->id]);
    	}
    		flash('Erro ao atualizar a slider','danger');
    		return redirect()->back()->withInput();

    }

    public function delete($id)
    {
    	if (Slider::destroy($id)) {
    		return ['status'=>'success'];
    	}
    		return false;
    }

    public function deleteMidia($id)
    {
    	$SliderMidia = SliderMidia::find($id);
        // dd($SliderMidia);
    	$file = $SliderMidia->midia->midia;

    	// dd(Storage::disk('uploads')->delete($SliderMidia->midia->midia));
    	if (Storage::disk('uploads')->delete($file)) {
    		$SliderMidia->delete();
    		return ['status'=>'success'];
    	}else{
            if ($SliderMidia->delete()) {
                return ['status'=>'success'];
             } 	
    	}
    }

    private function fileUpload($file){
		return $file->store('midia/banners','uploads');
    }
}
