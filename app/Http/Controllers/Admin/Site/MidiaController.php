<?php

namespace App\Http\Controllers\Admin\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Midia;

class MidiaController extends Controller
{
        public function __construct()
        {
    
        }
    
        public function index()
        {	
		    	$midias = Midia::all();
    			return view('admin.pages.site.midia.index',compact('midias'));
        }
    

}
