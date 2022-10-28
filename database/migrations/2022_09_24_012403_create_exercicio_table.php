<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercicio', function (Blueprint $table) {
            $table->id();
            $table->integer("repetitions");
            $table->integer("sets");
            $table->integer("weight");
            $table->foreignId("id_treino")->references("id")->on("treino");
            $table->foreignId("id_tipo_exercicio")->references("id")->on("tipo_exercicio")->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercicio');
    }
};
