<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Acesso
 */
class MailConfig extends Model
{
    protected $table = 'mail_config';

    public $timestamps = false;

    protected $fillable = [
        'username',
        'encryption',
        'port',
        'host',
        'driver',
        'password'
    ];

    protected $guarded = [];

        
}