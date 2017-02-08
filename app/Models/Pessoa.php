<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pessoa
 */
class Pessoa extends Model
{
    protected $table = 'pessoa';

    public $timestamps = true;

    protected $fillable = [
        'nome',
        'email',
        'foto_perfil',
        'usuario_id'
    ];

    protected $guarded = [];

    // public function usuario()
    // {
    // 	return $this->belongsTo('App/Models/Usuario','usuario_id');
    // }
}