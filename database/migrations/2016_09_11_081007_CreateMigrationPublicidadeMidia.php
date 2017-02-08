<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrationPublicidadeMidia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicidade_midia', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('publicidade_id')->unsigned();
            $table->integer('midia_id')->unsigned();
            $table->foreign('publicidade_id')
                    ->references('id')->on('publicidade');
            $table->foreign('midia_id')
                    ->references('id')->on('midia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicidade_midia');
    }
}
