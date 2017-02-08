<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contato
 */
class Contato extends Model
{
    protected $table = 'contato';

    public $timestamps = true;

    protected $fillable = [
        'tipo',
        'valor',
        'icon'
    ];

    protected $guarded = [];

        
}