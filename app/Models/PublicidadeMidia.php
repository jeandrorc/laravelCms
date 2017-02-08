<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PublicidadeMidium
 */
class PublicidadeMidia extends Model
{
    protected $table = 'publicidade_midia';

    public $timestamps = true;

    protected $fillable = [
        'publicidade_id',
        'midia_id'
    ];

    protected $guarded = [];

        
}