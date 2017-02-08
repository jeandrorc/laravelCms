<?php

use Illuminate\Database\Seeder;

class CreatePostCategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PostCategoria::create(['titulo'=>'noticias']);
        \App\Models\PostCategoria::create(['titulo'=>'fotos']);
        \App\Models\PostCategoria::create(['titulo'=>'videos']);
    }
}
