<?php

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostMidia;
use Storage;
use App\Models\Midia;
use App\Models\PostCategoria;

class PostController extends Controller
{
    	
    private $categorias;
        public function __construct()
        {
    		$this->categorias = PostCategoria::all()->pluck('titulo','id');
        }
    
        public function index()
        {
    		$posts = Post::all();
    		return view('admin.pages.blog.posts.index',compact('posts'));
        }
    
        public function create()
        {
        	$categorias = $this->categorias;
    		return view('admin.pages.blog.posts.create',compact('categorias'));
    
        }
    
        public function store(Request $request)
        {
		    	$input = $request->except('_token','_method','midias');
		    	$post = Post::create($input);
		    	if ($request->ajax()) {
		    		$errors = [];
		    		// dd($request->all());
		    		foreach ($request->midias as $key => $file) {
		    			$uploaded = $this->fileUpload($file);
		    			$uploaded ? 
		    			$midia = Midia::create(['ativo'=>1,'titulo'=>'','midia'=>$uploaded]) : 
		    			$errors[] = "Erro ao fazer upload do arquivo";
		    			$midia ? PostMidia::create(['midia_id'=>$midia->id,'post_id'=>$post->id]) :
		    			$errors[] = "Erro ao vincular uma midia a post"; 
		    		}

		    		return ['status'=>'sucesso','errors'=>$errors,'redirect'=>route('admin.blog.post.edit',[$post->id])];
		    	}

		    	if ($post) {
		    		flash('post criada com sucesso');
		    		return redirect()->route('admin.blog.post.edit',[$post->id]);
		    	}
		    		flash('Erro ao criar nova post','danger');
		    		return redirect()->back()->withInput();
        }
    
        public function edit($id)
        {
    		$post = Post::find($id);
        	$categorias = $this->categorias;

    		return view('admin.pages.blog.posts.edit',compact('post','categorias'));
        }

        public function geDestaque()
        {
        	$destaque = Post::where('destaque',true)->where('ativo',true)->first();
        	!$destaque ? $destaque = Post::where('ativo',true)->first() : $destaque = $destaque;

        	return $destaque;
        }

        public function destaque($id)
        {
        	$post = Post::find($id);
        	if ($post->destaque) {
        		$post->destaque = false;
        		$post->save();
        		flash('Destaque removido');
        		return redirect()->back();
        	}
        	Post::where('destaque',true)->update(['destaque'=>false]);

        	$post->destaque = true;
        	$post->save();

        	flash('Post destacado');
        	return redirect()->back();
     	
        }
    
        public function update($id, Request $request)
        {
        	$post = Post::find($id);
	    	$input = $request->except('_token','_method','midias');
	    	$post->update($input);
	    	$post->save();
	    	if ($request->ajax()) {
	    	// dd($request->midias);
	    		$errors = [];
	    		if ($request->midias) {
		    		foreach ($request->midias as $key => $file) {
		    			$uploaded = $this->fileUpload($file);
		    			$uploaded ? 
		    			$midia = Midia::create(['ativo'=>1,'titulo'=>'','midia'=>$uploaded]) : 
		    			$errors[] = "Erro ao fazer upload do arquivo";
		    			$midia ? PostMidia::create(['midia_id'=>$midia->id,'post_id'=>$post->id]) :
		    			$errors[] = "Erro ao vincular uma midia a post"; 
	    			}

	    		}

	    		return ['status'=>'sucesso','errors'=>$errors,'redirect'=>route('admin.blog.post.edit',[$post->id])];
	    	}
	    	if ($post) {
	    		flash('post atualizada com sucesso');
	    		return redirect()->route('admin.blog.post.edit',[$post->id]);
	    	}
	    		flash('Erro ao atualizar a post','danger');
	    		return redirect()->back()->withInput();
    
        }

	    public function deleteMidia($id)
	    {
	    	$PostMidia = PostMidia::find($id);
	    	$file = $PostMidia->midia->midia;
			Storage::disk('uploads')->delete($file);
			$PostMidia->delete();
	    	return ['status'=>'sucesso'];
	    }
    
        public function delete($id)
        {
        	if (Post::destroy($id)) {
        		flash('Post removido para sempre com sucesso!');
        		return ['status'=>'sucesso'];
        	}
        		
        		
        }
        private function fileUpload($file){
			return $file->store('midia/blog/post','uploads');
    	}	
}
