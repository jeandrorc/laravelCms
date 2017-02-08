<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Pessoa;
use Illuminate\Support\Facades\DB;

class CreateUsuarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


       $user =  Usuario::create([
            'nome' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'tipo' =>'ADMIN',
            'password' => bcrypt('@admin#2016')
            ]);
       	Pessoa::create([
       		'nome' => $user->nome,
       		'usuario_id' => $user->id,
       		'email' =>$user->email
       		]);
    }
}
