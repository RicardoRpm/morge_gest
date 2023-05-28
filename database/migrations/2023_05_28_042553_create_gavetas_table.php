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
        Schema::create('gavetas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('local_gaveta');
            $table->date('data_ultima_manutencao');
            $table->string('disponibilidade_gaveta');
            $table->string('info_adicional');
            $table->unsignedInteger('camera_id');
            $table->foreign('camera_id')->references('id')->on('cameras');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gavetas');
    }
};
