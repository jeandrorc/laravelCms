<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CreateUsuarioSeed::class);
        $this->call(ConfiguracaoSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(SecoesSeeder::class);
        $this->call(CreatePostCategoriaSeed::class);
    }
}
