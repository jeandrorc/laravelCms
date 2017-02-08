<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Endereco
 */
class Endereco extends Model
{
    protected $table = 'endereco';

    public $timestamps = true;

    protected $fillable = [
        'pessoa_id',
        'numero',
        'logradouro',
        'bairro',
        'cep',
        'cidade',
        'estado'
    ];

    protected $guarded = [];

    public function pessoa()
    {
        return $this->belongsTo('App\Models\Pessoa','pessoa_id');
    }
}