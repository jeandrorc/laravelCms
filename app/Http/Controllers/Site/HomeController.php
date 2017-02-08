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
        $marcas = $this->page->where('slug','like','marcas')->first();
        $vantagens = $this->page->where('slug','like','vantagens')->first();
        $parceiros = $this->page->where('slug','like','parceiros')->first();
        $clientes = $this->page->where('slug','like','clientes')->first();
        $servicos = $this->page->where('slug','like','servicos')->first();
        $news = $this->news();

        return view($this->view('home.index'),compact('news','carousel','marcas','vantagens','parceiros','clientes','servicos'));
    }

    public function show($id)
    {

    }

    public function news()
    {
        return $news = Post::where('ativo',true)->take(4)->get();
    }
}
