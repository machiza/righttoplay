<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('genero');
            $table->string('anos_professor');
            $table->string('anos_imp_rtp');
            $table->string('formacao');
            $table->string('form_exercicio');
            $table->string('form_cott_rtp');
            $table->string('orientar');
            $table->string('form_cott_periodo');
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
        Schema::dropIfExists('professores');
    }
}
