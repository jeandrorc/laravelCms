<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SliderMidium
 */
class SliderMidia extends Model
{
    protected $table = 'slider_midia';

    public $timestamps = true;

    protected $fillable = [
        'midia_id',
        'slider_id'
    ];

    protected $guarded = [];

   	public function midia()
   	{
   		return $this->belongsTo('App\Models\Midia');
   	}
        
}