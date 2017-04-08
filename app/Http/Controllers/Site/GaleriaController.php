<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Models\Categoria;
use App\Models\Galeria;
use App\Models\Post;

class GaleriaController extends CoreController
{

    protected $data;
    public function __construct(Galeria $galeria)
    {
        $this->data = $galeria->where('ativo', true)->get();
    }

    public function index()
    {
        $data = $this->data;
        return view($this->view('galeria.index'),compact('data'));
    }

    public function show($id)
    {
        $data = $this->data->where('slug', 'like', $id)->first();
        return view($this->view('galeria.show'),compact('data'));
    }


}
