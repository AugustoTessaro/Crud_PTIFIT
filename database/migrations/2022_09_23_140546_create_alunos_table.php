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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('name');            
            $table->date('dateBirth');
            $table->integer('age');
            $table->string('CPF');
            $table->string('RG');
            $table->string('phone');
            $table->foreignId("id_endereco")->references("id")->on("endereco")->onDelete('cascade');
            $table->foreignId("id_user")->references("id")->on("users")->onDelete('cascade');
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
        Schema::dropIfExists('alunos');
    }
};
