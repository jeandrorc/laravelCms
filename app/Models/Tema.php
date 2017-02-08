<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tema
 */
class Tema extends Model
{
    protected $table = 'tema';

    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'ativo',
        'inicio',
        'termino'
    ];

    protected $guarded = [];

        
}