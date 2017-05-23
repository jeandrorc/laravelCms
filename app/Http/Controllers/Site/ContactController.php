<?php

namespace App\Http\Controllers\Site;

use App\Mail\FormContact;
use App\Models\Categoria;
use App\Models\Empresa;
use App\Models\Pagina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends CoreController
{
    protected $data;
    public function __construct(Pagina $pagina)
    {
        $this->data = $pagina->where('slug', 'like', 'contact')->first();
    }

    public function index()
    {
        $data = $this->data;
        return view($this->view('contact.index'), compact('data'));
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        $response = $this->mail($request->except('_token', '_method'));

        flash($response);
        return redirect()->back();
    }

    public function mail($data)
    {
        try{
            $message = new FormContact($data);

            Mail::queue($message);
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
