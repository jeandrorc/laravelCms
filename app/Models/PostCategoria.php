<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


/**
 * Class PostCategorium
 */
class PostCategoria extends Model
{
    protected $table = 'post_categoria';
    use Sluggable;


    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'descricao',
        'slug',
        'ativo'
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
    public function posts()
    {
    	return $this->hasMany('App\Models\Post','post_categoria_id')->with('midias');
    }

    
    public function scopeAtivo()
    {
        return $this->ativo?'<i class="fa fa-check"></i> Ativo':'<i class="fa fa-stop"></i> Inativa';
    }

    public function scopeLink()
    {
        return route('site.blog.categoria',[$this->slug]);
    }
}