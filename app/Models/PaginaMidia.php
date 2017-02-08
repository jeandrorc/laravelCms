<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PaginaMidium
 */
class PaginaMidia extends Model
{
    protected $table = 'pagina_midia';

    public $timestamps = true;

    protected $fillable = [
        'midia_id',
        'pagina_id'
    ];

    protected $guarded = [];

    public function midia()
    {
    	return $this->belongsTo('App\Models\Midia');
    }

    public function pagina()
    {
    	return $this->belongsTo('App\Models\Pagina');

    }
}