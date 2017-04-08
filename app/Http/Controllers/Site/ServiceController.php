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
        $this->servico = $pagina->where('slug','like','services')->first();
    }

    public function index()
    {
        $data = $this->servico;
        return view($this->view('services.index'),compact('data'));
    }

    public function show($id)
    {
       $data = $this->servico->elementos->where('slug',$id)->first();
       return view($this->view('services.show'),compact('data'));
    }
}
