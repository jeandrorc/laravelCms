<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Newsletter
 */
class Newsletter extends Model
{
    protected $table = 'newsletter';

    public $timestamps = true;

    protected $fillable = [
        'email',
        'ativo'
    ];
    public $casts =['ativo'=>'booleand'];
    

    protected $guarded = [];

    public function scopeGetAtivo()
    {
        return $this->ativo?'<i class="fa fa-check"></i> Ativo':'<i class="fa fa-stop"></i> Inativa';
    }
        
}