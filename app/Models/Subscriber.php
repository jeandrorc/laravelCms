<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subscriber
 */
class Subscriber extends Model
{
    protected $table = 'subscribers';

    public $timestamps = true;

    protected $fillable = [
        'email'
    ];

    protected $guarded = [];

        
}