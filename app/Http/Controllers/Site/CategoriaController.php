<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Models\Categoria;
use CoreController;

class CategoriaController extends CoreController
{

    public function __construct()
    {

    }

    public function index()
    {
        return view('site.pages.about.index');
    }

    public function show($id)
    {

    }


}
