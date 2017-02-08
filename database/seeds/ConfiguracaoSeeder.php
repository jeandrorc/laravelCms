<?php

use Illuminate\Database\Seeder;

class ConfiguracaoSeeder extends Seeder
{

    public function run()
    {
        DB::table('configuracao')->truncate();

        \App\Models\Configuracao::create([
            'titulo' => 'JRCWS 1.0',
            'status' => \App\Models\Configuracao::CONSTRUCAO,
            'descricao' => 'Site em construção'
        ]);
        \App\Models\SiteConfig::create(
            [
                'key' =>'email.receiver',
                'value' => 'contato@site.com.br'
            ],
            [
                'key' =>'email.sender',
                'value' => 'sender@site.com.br'
            ]
        );

        \App\Models\MailConfig::create([
            'username'=>'jeandro.couto@gmail.com',
            'encryption'=>'ssl',
            'port'=>'587',
            'host'=>'smtp.gmail.com',
            'driver'=>'smtp',
            'password' =>'passtest'
        ]);
    }
}
