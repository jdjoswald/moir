<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovedadesMilitaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novedades_militares', function (Blueprint $table) {
            $table->id('IdNovedadesMilitares');
            $table->unsignedInteger('IdProvincia');
            $table->unsignedInteger('IdInforme');
            $table->string('NovedadesMilitares');
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
        Schema::dropIfExists('novedades_militares');
    }
}
