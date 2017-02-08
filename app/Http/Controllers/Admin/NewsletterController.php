<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Newsletter;
class NewsletterController extends Controller
{
    public function index()
    {

    	return view('admin.pages.newsletter.index');
    }
}
