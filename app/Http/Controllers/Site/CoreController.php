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
        Counter::count($view);
        return "site.pages.".$view;
    }

}