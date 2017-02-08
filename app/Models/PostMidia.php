<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostMidium
 */
class PostMidia extends Model
{
    protected $table = 'post_midia';

    public $timestamps = true;

    protected $fillable = [
        'midia_id',
        'post_id'
    ];

    protected $guarded = [];

    
    public function midia()
    {
    	return $this->belongsTo('App\Models\Midia');
    }
        
}