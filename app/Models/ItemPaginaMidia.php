<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemPaginaMidia
 */
class ItemPaginaMidia extends Model
{
    protected $table = 'item_pagina_midia';

    public $timestamps = true;

    protected $fillable = [
        'midia_id',
        'item_pagina_id'
    ];

    protected $guarded = [];

    public function midia()
    {
    	return $this->belongsTo('App\Models\Midia');
    }

    public function item()
    {
    	return $this->belongsTo('App\Models\ItemPagina');

    }
}