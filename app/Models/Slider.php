<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Slider
 */
class Slider extends Model
{
    protected $table = 'slider';

    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'descricao',
        'pagina',
        'link'
    ];

    protected $guarded = [];
    protected $casts = [
        'pagina' => 'array',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }


    public function midias()
    {
        return $this->hasMany('App\Models\SliderMidia')->with('midia');
    }

    public function banner()
    {
        $banner = $this->midias()->first();
        if($banner)
        {
            return $banner->midia->url();
        }
    }
        
}