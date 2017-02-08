<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuracao extends Model
{
    const ATIVO = "ATIVO";
    const DESATIVADO = "INATIVO";
    const CONSTRUCAO = "CONSTRUCAO";

    protected $table = 'configuracao';
    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'status',
        'descricao',
        'smtp_server',
        'smtp_user',
        'smtp_password',
        'smtp_port'
    ];

    protected $guarded = [];

        
}