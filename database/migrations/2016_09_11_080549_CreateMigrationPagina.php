<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrationPagina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagina', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->timestamps();

            $table->string('titulo');
            $table->string('slug');
            $table->text('descricao')->nullable();
            $table->longtext('texto')->nullable();
            $table->boolean('ativo')->default(true);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagina');
    }
}
