<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrationPaginaMidia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagina_midia', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->timestamps();
            $table->integer('midia_id')->unsigned();
            $table->integer('pagina_id')->unsigned();
            $table->foreign('pagina_id')
                    ->references('id')->on('pagina')
                    ->onDelete('cascade');
            $table->foreign('midia_id')
                    ->references('id')->on('midia')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagina_midia');
    }
}
