<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Counter;


class CoreController extends Controller {

    public function __construct()
    {

    }

    protected function view($view)
    {
        return "site.pages.".$view;
    }

}