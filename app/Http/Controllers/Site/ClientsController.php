<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Models\Categoria;
use App\Models\Pagina;

class ClientsController extends CoreController
{
    protected $data;
    public function __construct(Pagina $pagina)
    {
        $this->data = $pagina->where('slug', 'like', 'clients')->first();
    }

    public function index()
    {
        $data = $this->data;
        return view($this->view('clients.index'),compact('data'));
    }
}
