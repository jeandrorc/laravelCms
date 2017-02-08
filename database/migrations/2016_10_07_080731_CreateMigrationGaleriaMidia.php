<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrationGaleriaMidia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria_midia', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->timestamps();
            $table->integer('midia_id')->unsigned();
            $table->integer('galeria_id')->unsigned();
            $table->foreign('galeria_id')
                    ->references('id')->on('galeria')
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
        Schema::dropIfExists('galeria_midia');
    }
}
