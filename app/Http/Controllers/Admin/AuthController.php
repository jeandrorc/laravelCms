<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Hash;
use Auth;
use Flash;

class AuthController extends Controller
{
    
    public function login()
    {
    	return view('admin.pages.login.login');
    }

    public function logar(Request $request)
    {
		$input = $request->except('_token','_method');

		if (!$usuario = Usuario::where('username','like',$input['email'])->first()) {
		    flash('Usuario não encontrado','danger');
		    return redirect()->back();
		}

		if (!Hash::check($input['password'], $usuario->password)) {
		    flash('A senha digitada não confere','danger');
		    return redirect()->back();
		}

        flash('Seja bem vindo'.$usuario->nome, 'primary');
        Auth::login($usuario);
        // dd(Auth::user());
        return redirect()->route('admin.dashboard.index');

    }

    public function logout()
    {
    	Auth::logOut();
    	return redirect()->route('admin.login');
    }


	
}
