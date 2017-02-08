<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
/**
 * Class ItemPagina
 */
class ItemPagina extends Model
{
    protected $table = 'item_pagina';
    use Sluggable;

    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'descricao',
        'texto',
        'data_publicacao',
        'ativo',
        'slug',
        'pagina_id'
    ];


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }

    protected $guarded = [];
    protected $casts = [
        'ativo' => 'boolean',
    ];
    public function getDataPublicacaoAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }
    public function setDataPublicacaoAttribute($value)
    {   
        // dd($value);
        $this->attributes['data_publicacao'] = Carbon::createFromFormat('d/m/Y',$value);
    }

    public function pagina()
    {
        return $this->belongsTo('App\Models\Pagina','pagina_id');
    }

    public function scopeAtivo()
    {
        return $this->ativo?'<i class="fa fa-check"></i> Ativo':'<i class="fa fa-stop"></i> Inativa';
    }

    public function midias()
    {
        return $this->hasMany('App\Models\ItemPaginaMidia')->with('midia');
    }

    public function scopeGetRelateds()
    {
        return $this->hasMany('App\Models\ItemPagina','pagina_id','pagina_id')->with('midias');
    }

    public function link()
    {
        
    }
        
}