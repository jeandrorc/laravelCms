<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GaleriaMidium
 */
class GaleriaMidia extends Model
{
    protected $table = 'galeria_midia';

    public $timestamps = true;

    protected $fillable = [
        'midia_id',
        'galeria_id'
    ];

    protected $guarded = [];

    public function midia()
    {
    	return $this->belongsTo('App\Models\Midia');
    }
}