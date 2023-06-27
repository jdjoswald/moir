<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasRelevantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias_relevantes', function (Blueprint $table) {
            $table->id('IdNoticiasRelevantes');
            $table->unsignedInteger('IdProvincia');
            $table->unsignedInteger('IdInforme');
            $table->text('NoticiasRelevantes');
            $table->text('karma');
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
        Schema::dropIfExists('noticias_relevantes');
    }
}
