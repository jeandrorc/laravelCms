<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrationAgenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('titulo',100)->nullable();
            $table->string('descricao')->nullable();
            $table->boolean('publico')->default(false);
            $table->boolean('ativo')->default(true);
            $table->unsignedInteger('user')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda');
    }
}
