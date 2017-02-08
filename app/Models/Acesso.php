<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Acesso
 */
class Acesso extends Model
{
    protected $table = 'acesso';

    public $timestamps = true;

    protected $fillable = [
        'ip',
        'device',
        'page',
        'category'
        
    ];

    protected $guarded = [];

        
}