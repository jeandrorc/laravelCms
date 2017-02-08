<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Storage;
/**
 * Class Empresa
 */
class Empresa extends Model
{
    protected $table = 'empresa';

    public $timestamps = true;

    protected $fillable = [
        'razao_social',
        'nome_fantasia',
        'cnpj',
        'ie',
        'descricao_curta',
        'descricao_longa',
        'logo',
        'email',
        'telefone',
        'logradouro',
        'numero',
        'cep',
        'cidade',
        'estado',
        'bairro'
    ];

    protected $guarded = [];

    public function formatedAddress()
    {
        $retorno = "";
        $retorno .= $this->logradouro; 
        $retorno .= $this->logradouro ? " ".$this->numero : $this->numero; 
        $retorno .= $this->numero ? " , ".$this->bairro : $this->bairro; 
        $retorno .= $this->bairro ? " , ".$this->cidade : $this->cidade; 
        $retorno .= $this->cidade ? " , ".$this->estado : $this->estado; 
        return $retorno;
    }

    public function Logo(){
        // dd($this->logo);
       return '/files/'.$this->logo;
    }
}