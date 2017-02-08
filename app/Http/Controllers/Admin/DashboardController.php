<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Newsletter;
use App\Models\Acesso;
use App\Models\Post;
use App\Models\PostCategoria;

class DashboardController extends Controller
{
    
    protected $blogPosts;
    protected $blogCategorias;
    protected $emails;
    protected $visitas;
    public function __construct()
    {
    	$this->blogPosts = Post::all();
    	$this->blogCategorias = PostCategoria::all();
    	$this->emails = Newsletter::all();
    	$this->visitas = Acesso::all();
    }


    public function index()
    {
    	$visitas = $this->visitas;
    	$emails = $this->emails->take(10);
    	$blogCategorias = $this->blogCategorias;
    	$blogPosts = $this->blogPosts->take(10);

		return view('admin.pages.home.index',compact('blogPosts','blogCategorias','emails','visitas'));
    }
}
