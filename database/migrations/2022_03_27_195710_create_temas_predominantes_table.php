<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemasPredominantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temas_predominantes', function (Blueprint $table) {
            $table->id('IdTemasPredominantes');
            $table->unsignedInteger('IdProvincia');
            $table->unsignedInteger('IdInforme');
            $table->text('TemasPredominantes');
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
        Schema::dropIfExists('temas_predominantes');
    }
}
