<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Models\Categoria;

class AboutController extends CoreController
{

    public function __construct()
    {

    }

    public function index()
    {
        return view($this->view('about.index'));
    }

    public function show($id)
    {

    }


}
