<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Publicidade
 */
class Publicidade extends Model
{
    protected $table = 'publicidade';

    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'tipo',
        'descricao',
        'link',
        'pagina_id',
        'ordem',
        'ativo'
    ];
    public $casts =['ativo'=>'boolean'];


    protected $guarded = [];

        
}