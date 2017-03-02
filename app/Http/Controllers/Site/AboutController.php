<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Models\Categoria;
use App\Models\Pagina;

class AboutController extends CoreController
{

    public function __construct()
    {

    }

    public function index()
    {
        $data = Pagina::where('slug', 'like', 'about')->first();
        return view($this->view('about.index'), compact('data'));
    }

    public function show($id)
    {

    }


}
