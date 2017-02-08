<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Post;
use CoreController;

class NewsController extends CoreController
{

    public function __construct()
    {

    }

    public function index()
    {
        $news = Post::where('ativo',true)
            ->orderBy('data_publicacao','DESC')
            ->get();
        return view($this->view('blog.index'),compact($news));
    }

    public function show($id)
    {
        $news = Post::find($id);
        return view($this->view('blog.show'),compact($news));
    }


}
