<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Usuario
 */
class Usuario  extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuario';

    public $timestamps = true;

    protected $fillable = [
        'nome',
        'username',
        'email',
        'password',
        'tipo',
        'ativo',
        'remember_token'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $guarded = [];

    public function pessoa()
    {
        return $this->hasOne('App\Models\Pessoa','usuario_id');
    }
        
}