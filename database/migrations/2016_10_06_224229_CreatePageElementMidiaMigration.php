<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageElementMidiaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_pagina_midia', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->timestamps();
            $table->integer('midia_id')->unsigned();
            $table->integer('item_pagina_id')->unsigned();
            $table->foreign('item_pagina_id')
                    ->references('id')->on('item_pagina')
                    ->onDelete('cascade');
            $table->foreign('midia_id')
                    ->references('id')->on('midia')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_pagina_midia');
    }
}
