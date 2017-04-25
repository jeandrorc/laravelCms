<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrationAgendaDia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda_dia', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('titulo');
            $table->string('descricao')->nullable();
            $table->longText('texto')->nullable();
            $table->boolean('ativo')->default(true);
            $table->boolean('check')->default(false);
            $table->timestamp('inicio')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('termino')->nullable()->default(null);
            $table->unsignedInteger('agenda');

            $table->foreign('agenda')
                ->references('id')->on('agenda')
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
        Schema::dropIfExists('agenda_dia');
        Schema::dropForeign('agenda_dia_agenda_id_foreign');
    }
}
