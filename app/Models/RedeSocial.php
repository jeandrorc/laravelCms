<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RedeSocial
 */
class RedeSocial extends Model
{
    protected $table = 'rede_social';

    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'link',
        'icone'
    ];

    protected $guarded = [];

        
}