<?php

namespace App\Models;

use App\Helper\AutoEmbed;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Carbon\Carbon;
use App\Helper\Video;

/**
 * Class Post
 */
class Post extends Model
{
    use Sluggable;
    protected $table = 'post';

    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'descricao',
        'texto',
        'data_publicacao',
        'ativo',
        'video',
        'destaque',
        'slug',
        'post_categoria_id'
    ];
    public $casts =['ativo'=>'boolean','destaque'=>'boolean'];


    protected $guarded = [];


    public function __toString()
    {
        return $this->titulo;
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }


    public function getDataPublicacaoAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }
    public function setDataPublicacaoAttribute($value)
    {   
        $this->attributes['data_publicacao'] = Carbon::createFromFormat('d/m/Y',$value);
    }

    public function scopeLink()
    {
        return route('site.blog.categoria.post',[$this->categoria->slug,$this->slug]);
    }

    public function categoria()
    {
        return $this->belongsTo('App\Models\PostCategoria','post_categoria_id');
    }

    public function scopeAtivo()
    {
        return $this->ativo?'<i class="fa fa-check"></i> Ativo':'<i class="fa fa-stop"></i> Inativa';
    }

    public function midias()
    {
        return $this->hasMany('App\Models\PostMidia')->with('midia');
    }

    public function cover()
    {
        $midia = $this->midias()->first();
        if ($midia){
            return $midia->midia->cover();
        }
    }

    public function relacionados()
    {
        return $this->hasMany('App\Models\Post','post_categoria_id','post_categoria_id')->with('midias');
    }

    public function views()
    {
        $views = \App\Models\Acesso::where('page','like',$this->slug)->count();
        return '<span class="label label-info">'.$views.'</span>';
    }

    public function scopeDestaqueBtn()
    {
        if ($this->destaque) {
            return $btn = "<a href='".route('admin.blog.post.edit.destaque',[$this->id])."' class='btn btn-primary'> <i class='fa fa-star'></i> </a>";
        }
            return $btn = "<a href='".route('admin.blog.post.edit.destaque',[$this->id])."' class='btn btn-default'> <i class='fa fa-star-o'></i> </a>";
    }

    public function scopeVideoUrl()
    {
       $embed = new AutoEmbed();
        return $embed->get($this->video);
    }

    public function scopeGetCover()
    {
       if ($this->video){
           return $this->videoUrl();
       }
        if ($this->midias->first()){
            return "<img src='".$this->midias->first()->midia->cover()."' class='coverPhoto'></img>";
        }
    }

}