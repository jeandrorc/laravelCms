<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageElementMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_pagina', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->timestamps();

            $table->string('titulo');
            $table->string('descricao',600)->nullable();
            $table->longText('texto');
            $table->text('link')->nullable();
            $table->date('data_publicacao');
            $table->boolean('ativo')->default(true);
            $table->string('slug');
            $table->integer('pagina_id')->unsigned();
            $table->foreign('pagina_id')
                ->references('id')->on('pagina')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_pagina');
    }
}
