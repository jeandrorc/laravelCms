<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Midium
 */
class Midia extends Model
{
    protected $table = 'midia';

    public $timestamps = true;

    protected $fillable = [
        'ativo',
        'titulo',
        'midia'
    ];

    protected $guarded = [];

    public function galeria()
    {
    	return $this->hasMany('App\Models\Galeria');
    }
    public function scopeUrl()
    {
       return '/files/'.$this->midia;
    }
    public function big(){
        return route('resize.image',['size'=>'big','image'=>$this->midia]);
    } 
    public function cover(){
        return route('resize.image',['size'=>'cover','image'=>$this->midia]);
    }
    public function thumb(){
        return route('resize.image',['size'=>'thumb','image'=>$this->midia]);
    }
    public function miniatura(){
        return route('resize.image',['size'=>'xs','image'=>$this->midia]);
    }
    public function scopeH1(){
        return route('resize.image',['size'=>'h1','image'=>$this->midia]);
    }
    public function scopeH2(){
        return route('resize.image',['size'=>'h2','image'=>$this->midia]);
    }
    public function scopeWide(){
        return route('resize.image',['size'=>'wide','image'=>$this->midia]);
    }
    public function scopeFace(){
        return route('resize.image',['size'=>'face','image'=>$this->midia]);
    }
    public function scopeTwitter(){
        return route('resize.image',['size'=>'twitter','image'=>$this->midia]);
    }
    public function itemSlide(){
        return route('resize.image',['size'=>'slideItem','image'=>$this->midia]);
    }
    public function blogCover(){
        return route('resize.image',['size'=>'blogCover','image'=>$this->midia]);
    }
    public function blogInterna(){
        return route('resize.image',['size'=>'blogInterna','image'=>$this->midia]);
    }
}