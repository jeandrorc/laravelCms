<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrationPostMidia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_midia', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->integer('midia_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')
                    ->references('id')->on('post')
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
        Schema::dropIfExists('post_midia');
    }
}
