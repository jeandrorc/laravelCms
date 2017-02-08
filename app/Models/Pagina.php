<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
/**
 * Class Pagina
 */
class Pagina extends Model
{
    use Sluggable;
    protected $table = 'pagina';

    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'slug',
        'descricao',
        'ativo',
        'texto'
    ];

    protected $guarded = [];
    
    protected $casts = [
        'ativo' => 'boolean',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }

    public function scopeAtivo()
    {
        return $this->ativo?'<i class="fa fa-check"></i> Ativo':'<i class="fa fa-stop"></i> Inativa';
    }
    public function midias()
    {
        return $this->hasMany('App\Models\PaginaMidia');
    }

    public function elementos()
    {
        return $this->hasMany('App\Models\ItemPagina','pagina_id')->with('midias');
    }
}