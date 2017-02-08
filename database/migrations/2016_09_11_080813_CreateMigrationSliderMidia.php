<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrationSliderMidia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_midia', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->timestamps();
            $table->integer('midia_id')->unsigned();
            $table->integer('slider_id')->unsigned();
            $table->foreign('slider_id')
                    ->references('id')->on('slider')
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
        Schema::dropIfExists('slider_midia');
    }
}
