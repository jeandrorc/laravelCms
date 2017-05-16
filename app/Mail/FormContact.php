<?php

namespace App\Mail;

use App\Models\Empresa;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FormContact extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct(Array $data)
    {
        $this->view('emails.contato', compact('data'));
    }

    public function build()
    {
        return $this->to(Empresa::first()->email)->cc(Empresa::first()->email)->cc(config('username'));
    }
}
