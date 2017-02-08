<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Models\Categoria;

class MaintaimentController extends CoreController
{

    public function __construct()
    {

    }

    public function construcao()
    {
        return view('site.construcao');
    }

    public function manutencao()
    {
        return view('site.manutencao');
    }

}
