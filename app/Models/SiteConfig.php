<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Acesso
 */
class SiteConfig extends Model
{
    protected $table = 'site_config';

    public $timestamps = false;

    protected $fillable = [
        'key',
        'value'
    ];

    protected $guarded = [];

        
}