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
            'driver'=>'smtp',
            'host'=>'smtp.mailtrap.io',
            'port'=>'2525',
            'username'=>'4b7d95171d80c3',
            'password' =>'2c9df20f15a8db',
            'encryption'=>'ssl'
        ]);
    }
}
