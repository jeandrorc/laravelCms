<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Models\Post;
use App\Models\PostCategoria;


class BlogController extends CoreController
{

    private $posts;
    private $categorias;

    public function __construct(Post $post, PostCategoria $categoria)
    {
        $this->posts = $post->where('ativo',true)->orderBy('destaque')->orderBy('data_publicacao','desc');
        $this->categorias = $categoria->where('ativo',true)->get();
    }

    public function index()
    {
        $featured = array_first($this->posts->get());
        $posts = $this->posts->where('destaque',false)->paginate(5);
        $categorias = $this->categorias;

        return view($this->view('blog.index'),compact('posts','categorias','featured'));
    }

    public function show($categoria,$post)
    {
        $categoria = $this->categorias->where('slug',$categoria)->first();
        $categorias = $this->categorias;
        $relateds = $categoria->posts->where('ativo',true)->sortBy('destaque')->sortBy('data_publicacao')->take(4);
        $post = $categoria->posts->where('slug',$post)->first();
        return view($this->view('blog.show'),compact('post','categorias','relateds'));
    }

    public function categoriaShow($categoria)
    {
        $categoria = $this->categorias->where('slug',$categoria)->first();
        $categorias = $this->categorias;
        $posts = $categoria->posts->where('ativo',true)->sortBy('destaque')->sortBy('data_publicacao');

        return view($this->view('blog.categoria.show'),compact('posts','categorias','categoria'));
    }
}
