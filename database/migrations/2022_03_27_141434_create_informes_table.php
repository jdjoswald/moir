<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateInformesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('informes', function (Blueprint $table) {

            $table->id('IdInforme');
            $table->string('Fecha');
            $table->unsignedInteger('IdProvincia');
            $table->text('Region');
            $table->text('Analista');
            $table->text('Director');
            $table->text('Lugares');
            $table->text('Obras');
            $table->text('InstitucionObraCritica');
            $table->text('MinistroObraCritica');
            $table->text('InstitucionCrisis');
            $table->text('MinistroCrisis');
            $table->text('CrisisPotencial');
            $table->text('InstitucionCrisisPotencial');
            $table->text('MinistroCrisisPotencial');
            $table->text('hallazgo');
            $table->text('InstitucionHallazgo');
            $table->text('MinistroHallazgo');
            $table->text('codigo');
            $table->text('comentario');
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
        Schema::dropIfExists('informes');
    }
}
