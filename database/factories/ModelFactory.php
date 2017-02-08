<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
$faker = Faker\Factory::create('pt_BR');

    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Model\PostCategoria::class, function (Faker\Generator $faker) {
	// $faker = Faker\Factory::create('pt_BR');
    return [
        'titulo' => $faker->title,
        'descricao' => $faker->text,
        'ativo' => true,
    ];
});



$factory->define(App\Model\Empresa::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create('pt_BR');
    return [
        'razao_social'=>$faker->title,
        'nome_fantasia'=>$faker->title,
        'descricao_curta'=>$faker->title,
        'descricao_longa'=>$faker->text,
        'logo'=>'',
        'email'=>$faker->email,
        'telefone'=>'('.$faker->areaCode.') '.$faker->cellphone,
        'logradouro'=>$faker->streetAddress,
        'numero'=>$faker->number,
        'cep'=>85802-160,
        'cidade'=>$faker->city,
        'estado'=>$faker->state,
        'bairro'=>$faker->citySuffix
    ];
});

$factory->define(App\Model\Configuracao::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create('pt_BR');
    return [
        'titulo'=>'Site em construção',
        'status'=>'CONSTRUCAO',
        'smtp_server'=>'',
        'smtp_user'=>'',
        'smtp_password'=>'',
        'smtp_port'=>''
    ];
});

$factory->define(App\Model\Pagina::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create('pt_BR');
    return [
        'titulo'=>$faker->titulo,
        'descricao'=>$faker->text,
        'ativo'=>true,
        'texto'=>$faker->text
    ];
});
