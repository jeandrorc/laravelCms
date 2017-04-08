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
        $carousel = Slider::all();
        $parceiros = $this->page->where('slug','like','parceiros')->first();
        $clientes = $this->page->where('slug','like','clients')->first();
        $sobre  =   $this->page->where('slug', 'like', 'about')->first();
        $projetos = $this->page->where('slug', 'like', 'projects')->first()->elementos()->take(3)->get();

        $news = $this->news();
        $videos = $this->news()->where('video','<>','');

        return view($this->view('home.index'),compact('news','videos', 'projetos', 'carousel','parceiros','clientes', 'sobre'));
    }

    public function show($id)
    {

    }

    public function news()
    {
        return $news = Post::where('ativo',true)->take(4)->paginate();
    }
}
