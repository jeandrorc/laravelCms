<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrationPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::dropIfExists('post');
        
        Schema::create('post', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('titulo');
            $table->text('descricao');
            $table->longtext('texto');
            $table->date('data_publicacao');
            $table->boolean('ativo')->default(true);
            $table->boolean('destaque')->default(true);
            $table->string('video')->nullable();
            $table->string('slug');
            $table->integer('post_categoria_id')->unsigned();
            $table->foreign('post_categoria_id')
                ->references('id')->on('post_categoria')
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
        Schema::dropIfExists('post');
    }
}
