<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovedadesPolicialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novedades_policiales', function (Blueprint $table) {
            $table->id('IdNovedadesPoliciales');
            $table->unsignedInteger('IdProvincia');
            $table->unsignedInteger('IdInforme');
            $table->string('NovedadesPoliciales');
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
        Schema::dropIfExists('novedades_policiales');
    }
}
