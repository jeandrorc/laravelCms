<?php

use Illuminate\Database\Seeder;

class SecoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Pagina::create(['titulo'=>'Home','descricao'=>'','texto'=>'Pagina Inicital']);
        \App\Models\Pagina::create(['titulo'=>'About','descricao'=>'','texto'=>'Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla quis lorem ut libero malesuada feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.']);
        \App\Models\Pagina::create(['titulo'=>'Pictures','descricao'=>'','texto'=>'Galeria de fotos']);
        \App\Models\Pagina::create(['titulo'=>'Videos','descricao'=>'','texto'=>'Galeria de videos']);
        \App\Models\Pagina::create(['titulo'=>'Testemunials','descricao'=>'','texto'=>'Testemunhos dos clientes']);
        \App\Models\Pagina::create(['titulo'=>'Services','descricao'=>'','texto'=>'Serviços']);
        \App\Models\Pagina::create(['titulo'=>'Contatact','descricao'=>'','texto'=>'Pagina de contato']);
    }
}
