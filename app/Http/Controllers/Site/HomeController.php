<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Models\Categoria;
use App\Models\Pagina;
use App\Models\Post;
use App\Models\Slider;


class HomeController extends CoreController
{
    private $page;
    public function __construct(Pagina $pagina)
    {
        $this->page = $pagina;
    }

    public function index()
    {
        $banner = Slider::all();


        return view($this->view('home.index'),compact('banner'));
    }

    public function show($id)
    {

    }

    public function news()
    {
        return $news = Post::where('ativo',true)->take(4)->paginate();
    }
}
