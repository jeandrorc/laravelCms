<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Models\Categoria;
use App\Models\Pagina;
use App\Models\Slider;

class ServiceController extends CoreController
{

    private $servico;
    public function __construct(Pagina $pagina)
    {
        $this->servico = $pagina->where('slug','like','servicos')->first();
    }

    public function index()
    {
        $servicos = $this->servico;
        return view($this->view('services.index'),compact('servicos'));
    }

    public function show($id)
    {
       $servico = $this->servico->elementos->where('slug',$id)->first();
       return view($this->view('services.show'),compact('servico'));
    }
}
