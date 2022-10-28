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
        Schema::create('tipo_exercicio', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            $table->string("gif_link");            
            $table->foreignId("id_equipamento")->references("id")->on("equipamento");

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
        Schema::dropIfExists('tipo_exercicio');
    }
};
