<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Script
 */
class Script extends Model
{
    protected $table = 'scripts';

    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'valor',
        'ativo'
    ];
    public $casts =['ativo'=>'boolean'];
    

    protected $guarded = [];

    public function scopeAtivo()
    {
        return $this->ativo?'<i class="fa fa-check"></i> Ativo':'<i class="fa fa-stop"></i> Inativa';
    }

        
}