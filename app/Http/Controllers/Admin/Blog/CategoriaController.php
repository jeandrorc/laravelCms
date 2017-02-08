<?php

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\PostCategoria as Categoria;


class CategoriaController extends Controller
{
        public function __construct()
        {
    
        }
    
        public function index()
        {
    		$categorias = Categoria::all();
    		return view('admin.pages.blog.categorias.index',compact('categorias'));
        }
    
        public function create()
        {
    		return view('admin.pages.blog.categorias.create');
    	
        }
    
        public function store(Request $request)
        {
    		if ($categoria = Categoria::create($request->all())) {
    			flash('Categoria adicionada com sucesso');
    			return redirect()->route('admin.blog.categoria.index');
    		}
    			flash('Erro ao criar categoria');
    			return redirect()->back()->withInput();
        }	
    
        public function edit($id)
        {
    		$categoria = Categoria::find($id);
    		return view('admin.pages.blog.categorias.edit',compact('categoria'));
        }	

        
    
        public function update($id, Request $request)
        {
    		$categoria = Categoria::find($id);
    		if ($categoria = $categoria->update($request->all())) {
    			flash('Categoria editada com sucesso');
    			return redirect()->route('admin.blog.categoria.index');
    		}
    			flash('Erro ao editar categoria');
    			return redirect()->back()->withInput();
        }
    
        public function destroy($id)
        {
        	
        }
}
