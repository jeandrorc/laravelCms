<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 */
class Menu extends Model
{
    protected $table = 'menu';

    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'rota',
        'ordem'
    ];

    protected $guarded = [];

        
}