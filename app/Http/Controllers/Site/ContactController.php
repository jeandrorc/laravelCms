<?php

namespace App\Http\Controllers\Site;

use App\Mail\FormContact;
use App\Models\Categoria;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends CoreController
{

    public function __construct()
    {

    }

    public function index()
    {
        return view($this->view('contact.index'));
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'email' => 'required'
        ]);

       $response = $this->mail($request->all());
        flash($response);
        return redirect()->back();
    }

    public function mail($data)
    {
        try{
            $receiver = Empresa::first()->email;
            $message = new FormContact($data);
            Mail::to($receiver)
                ->bcc('jeandro.couto@gmail.com')
                ->queue($message);
            return "Sua mensagem foi enviada com sucesso";
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    public function previewContato(Request $request)
    {
        $data = $request->all();
        return view('emails.contato',$data);
    }

}
