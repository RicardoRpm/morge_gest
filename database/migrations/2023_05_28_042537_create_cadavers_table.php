<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cadavers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('idade');
            $table->string('genero');
            $table->string('estado_civil');
            $table->dateTime('data_hora_obito');
            $table->string('causa_morte');
            $table->dateTime('data_hora_entrada_morgue');
            $table->string('local_obito');
            $table->string('contacto_familiar_1');
            $table->string('contacto_familiar_2');
            $table->string('contacto_familiar_3');
            $table->string('info_medicas_relevantes');
            $table->string('detalhes_procedimento');
            $table->string('medico_autopsia');
            $table->unsignedInteger('id_gaveta');
            $table->foreign('id_gaveta')->references('id')->on('gavetas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadavers');
    }
};
