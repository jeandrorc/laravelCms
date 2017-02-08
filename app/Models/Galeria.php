<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

/**
 * Class Galerium
 */
class Galeria extends Model
{
    use Sluggable;
    
    protected $table = 'galeria';

    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'descricao',
        'ativo',
        'slug'
    ];
    protected $casts = [
        'ativo' => 'boolean',
    ];
    protected $guarded = [];

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
        return $this->hasMany('App\Models\GaleriaMidia')->with('midia');
    }
    public function scopeLink()
    {
        return route('site.galeria',$this->slug);
    }

        
}