<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Models\Categoria;
use App\Models\Pagina;
use App\Models\Post;

class ProjectController extends CoreController
{
    protected $data;
    public function __construct(Pagina $pagina)
    {
        $this->data = $pagina->where('slug', 'like', 'projects')->first();
    }

    public function index()
    {
        $data = $this->data;
        $projects = $data->elementos()->where('ativo', true)->get();

        return view($this->view('projects.index'),compact('data','projects'));
    }

    public function show($id)
    {
        $data = $this->data->elementos()->where('slug', 'like', $id)->first();
        return view($this->view('projects.show'),compact('data'));
    }


}
