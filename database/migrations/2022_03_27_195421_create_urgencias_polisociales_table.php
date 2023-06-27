<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrgenciasPolisocialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urgencias_polisociales', function (Blueprint $table) {
            $table->id('IdUrgenciasPolisociales');
            $table->unsignedInteger('IdProvincia');
            $table->unsignedInteger('IdInforme');
            $table->text('UrgenciasPolisociales');
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
        Schema::dropIfExists('urgencias_polisociales');
    }
}
